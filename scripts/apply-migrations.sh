#!/bin/sh
set -eu

if [ ! -f .env ]; then
  echo "Missing .env file. Create it from .env.example first."
  exit 1
fi

set -a
. ./.env
set +a

docker compose exec -T db sh -lc 'exec mariadb -u"$MARIADB_USER" -p"$MARIADB_PASSWORD" "$MARIADB_DATABASE" <<SQL
CREATE TABLE IF NOT EXISTS wp_schema_migrations (
  id INT NOT NULL AUTO_INCREMENT,
  filename VARCHAR(255) NOT NULL,
  applied_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_filename (filename)
);
SQL'

for file in $(find database/migrations -maxdepth 1 -type f -name '*.sql' | sort); do
  name=$(basename "$file")

  applied=$(docker compose exec -T db sh -lc 'exec mariadb -u"$MARIADB_USER" -p"$MARIADB_PASSWORD" "$MARIADB_DATABASE" -Nse "SELECT COUNT(*) FROM wp_schema_migrations WHERE filename = '\''"$name"'\'';"')

  if [ "$applied" != "0" ]; then
    echo "Skip migration: $name"
    continue
  fi

  echo "Apply migration: $name"
  docker compose exec -T db sh -lc 'exec mariadb -u"$MARIADB_USER" -p"$MARIADB_PASSWORD" "$MARIADB_DATABASE"' < "$file"
  docker compose exec -T db sh -lc 'exec mariadb -u"$MARIADB_USER" -p"$MARIADB_PASSWORD" "$MARIADB_DATABASE" -e "INSERT INTO wp_schema_migrations (filename) VALUES ('\''"$name"'\'');"'
done

echo "Migrations completed."