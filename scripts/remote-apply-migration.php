<?php
$migrationName = getenv('MIGRATION_NAME');
if (!$migrationName) {
    fwrite(STDERR, "MIGRATION_NAME is required\n");
    exit(1);
}

$configPath = __DIR__ . '/../wp-config.php';
if (!is_file($configPath)) {
    fwrite(STDERR, "wp-config.php not found\n");
    exit(1);
}

$config = file_get_contents($configPath);

function cfg(string $key, string $content): string
{
    $pattern = '/define\(\s*["\']' . preg_quote($key, '/') . '["\']\s*,\s*["\']([^"\']*)["\']\s*\)/';
    if (!preg_match($pattern, $content, $m)) {
        fwrite(STDERR, "Missing config: {$key}\n");
        exit(1);
    }
    return $m[1];
}

$db = cfg('DB_NAME', $config);
$user = cfg('DB_USER', $config);
$pass = cfg('DB_PASSWORD', $config);
$host = cfg('DB_HOST', $config);

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    fwrite(STDERR, $mysqli->connect_error . PHP_EOL);
    exit(1);
}

if (!$mysqli->set_charset('utf8mb4')) {
    fwrite(STDERR, $mysqli->error . PHP_EOL);
    exit(1);
}

$createTable = 'CREATE TABLE IF NOT EXISTS wp_schema_migrations ('
    . 'id INT NOT NULL AUTO_INCREMENT,'
    . 'filename VARCHAR(255) NOT NULL,'
    . 'applied_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,'
    . 'PRIMARY KEY (id),'
    . 'UNIQUE KEY uq_filename (filename)'
    . ')';
$mysqli->query($createTable);

$escapedName = $mysqli->real_escape_string($migrationName);
$check = $mysqli->query("SELECT COUNT(*) AS cnt FROM wp_schema_migrations WHERE filename = '{$escapedName}'");
$row = $check ? $check->fetch_assoc() : ['cnt' => 0];

if ((int)$row['cnt'] > 0) {
    echo 'Skip migration: ' . $migrationName . PHP_EOL;
    exit(0);
}

$sqlPath = __DIR__ . '/../database/migrations/' . $migrationName;
$sql = file_get_contents($sqlPath);
if ($sql === false || !$mysqli->multi_query($sql)) {
    fwrite(STDERR, $mysqli->error . PHP_EOL);
    exit(1);
}

do {
    if ($result = $mysqli->store_result()) {
        $result->free();
    }
} while ($mysqli->more_results() && $mysqli->next_result());

if ($mysqli->errno) {
    fwrite(STDERR, $mysqli->error . PHP_EOL);
    exit(1);
}

$mysqli->query("INSERT INTO wp_schema_migrations (filename) VALUES ('{$escapedName}')");
echo 'Applied migration: ' . $migrationName . PHP_EOL;
