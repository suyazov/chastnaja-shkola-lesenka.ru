#!/bin/sh
set -eu

if [ ! -f .env ]; then
  echo "Missing .env file. Create it from .env.example first."
  exit 1
fi

set -a
. ./.env
set +a

mkdir -p database
docker compose exec -T db sh -lc 'exec mysqldump -u"$MARIADB_USER" -p"$MARIADB_PASSWORD" --single-transaction --default-character-set=utf8mb4 "$MARIADB_DATABASE"' > database/local.sql

echo "Database export completed: database/local.sql"