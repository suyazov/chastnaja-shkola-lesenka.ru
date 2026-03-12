#!/bin/sh
set -eu

if [ ! -f .env ]; then
  echo "Missing .env file. Create it from .env.example first."
  exit 1
fi

set -a
. ./.env
set +a

if [ ! -f database/production.sql ]; then
  echo "Missing database/production.sql dump file."
  exit 1
fi

docker compose exec -T db sh -lc 'exec mariadb -u"$MARIADB_USER" -p"$MARIADB_PASSWORD" "$MARIADB_DATABASE"' < database/production.sql

docker compose exec -T wordpress php -r '$mysqli = new mysqli(getenv("WORDPRESS_DB_HOST") ? strtok(getenv("WORDPRESS_DB_HOST"), ":") : "db", getenv("WORDPRESS_DB_USER"), getenv("WORDPRESS_DB_PASSWORD"), getenv("WORDPRESS_DB_NAME")); if ($mysqli->connect_errno) { fwrite(STDERR, $mysqli->connect_error . PHP_EOL); exit(1); } $port = getenv("WORDPRESS_PORT") ?: "8080"; $siteUrl = "http://localhost:" . $port; $stmt = $mysqli->prepare("UPDATE wp_options SET option_value = ? WHERE option_name IN (?, ?)"); $home = "home"; $site = "siteurl"; $stmt->bind_param("sss", $siteUrl, $home, $site); $stmt->execute(); $stmt->close(); $result = $mysqli->query("SELECT option_value FROM wp_options WHERE option_name = \"clearfy_option\""); if ($result && ($row = $result->fetch_row())) { $options = @unserialize($row[0]); if (is_array($options) && isset($options["redirect_from_http_to_https"])) { $options["redirect_from_http_to_https"] = ""; $update = $mysqli->prepare("UPDATE wp_options SET option_value = ? WHERE option_name = \"clearfy_option\""); $serialized = serialize($options); $update->bind_param("s", $serialized); $update->execute(); $update->close(); } }'

echo "Database import completed."