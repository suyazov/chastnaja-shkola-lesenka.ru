#!/bin/sh
set -eu

if [ "$#" -lt 2 ]; then
  echo "Usage: $0 <ssh_host> <remote_wp_path>"
  echo "Example: $0 myserver /var/www/fastuser/data/www/chastnaja-shkola-lesenka.ru"
  exit 1
fi

SSH_HOST="$1"
REMOTE_PATH="$2"

for file in $(find database/migrations -maxdepth 1 -type f -name '*.sql' | sort); do
  name=$(basename "$file")

  echo "Upload migration: $name"
  ssh "$SSH_HOST" "mkdir -p '$REMOTE_PATH/database/migrations'"
  scp "$file" "$SSH_HOST:$REMOTE_PATH/database/migrations/$name"

  echo "Apply migration on server: $name"
  ssh "$SSH_HOST" "cd '$REMOTE_PATH' && php -r '
  \$config = file_get_contents("wp-config.php");
  function cfg(\$key, \$content) {
    if (!preg_match("/define\\(\\s*[\\\"\\\']" . \$key . "[\\\"\\\']\\s*,\\s*[\\\"\\\']([^\\\"\\\']*)[\\\"\\\']\\s*\\)/", \$content, \$m)) { exit(1); }
    return \$m[1];
  }
  \$db = cfg("DB_NAME", \$config);
  \$user = cfg("DB_USER", \$config);
  \$pass = cfg("DB_PASSWORD", \$config);
  \$host = cfg("DB_HOST", \$config);
  \$mysqli = new mysqli(\$host, \$user, \$pass, \$db);
  if (\$mysqli->connect_errno) { fwrite(STDERR, \$mysqli->connect_error . PHP_EOL); exit(1); }
  \$mysqli->query("CREATE TABLE IF NOT EXISTS wp_schema_migrations (id INT NOT NULL AUTO_INCREMENT, filename VARCHAR(255) NOT NULL, applied_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (id), UNIQUE KEY uq_filename (filename))");
  \$name = "$name";
  \$check = \$mysqli->query("SELECT COUNT(*) AS cnt FROM wp_schema_migrations WHERE filename = " . "'" . \$mysqli->real_escape_string(\$name) . "'")->fetch_assoc();
  if ((int)\$check["cnt"] > 0) { echo "Skip migration: " . \$name . PHP_EOL; exit(0); }
  \$sql = file_get_contents("database/migrations/" . \$name);
  if (!\$mysqli->multi_query(\$sql)) { fwrite(STDERR, \$mysqli->error . PHP_EOL); exit(1); }
  do { if (\$result = \$mysqli->store_result()) { \$result->free(); } } while (\$mysqli->more_results() && \$mysqli->next_result());
  if (\$mysqli->errno) { fwrite(STDERR, \$mysqli->error . PHP_EOL); exit(1); }
  \$mysqli->query("INSERT INTO wp_schema_migrations (filename) VALUES ('" . \$mysqli->real_escape_string(\$name) . "')");
  echo "Applied migration: " . \$name . PHP_EOL;
  '"
done

echo "Remote migrations completed."