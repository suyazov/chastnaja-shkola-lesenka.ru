#!/bin/sh
set -eu

if [ "$#" -lt 2 ]; then
  echo "Usage: $0 <ssh_host> <remote_wp_path>"
  echo "Example: $0 myserver /var/www/fastuser/data/www/chastnaja-shkola-lesenka.ru"
  exit 1
fi

SSH_HOST="$1"
REMOTE_PATH="$2"

# Prefer the same major PHP version as web runtime to avoid plugin syntax errors in CLI.
REMOTE_PHP_BIN=$(ssh "$SSH_HOST" "if [ -x /opt/php84/bin/php ]; then echo /opt/php84/bin/php; elif [ -x /opt/php80/bin/php ]; then echo /opt/php80/bin/php; elif [ -x /opt/php74/bin/php ]; then echo /opt/php74/bin/php; else command -v php; fi")

# Upload migration helper script once per run.
scp scripts/remote-apply-migration.php "$SSH_HOST:$REMOTE_PATH/scripts/remote-apply-migration.php"

for file in $(find database/migrations -maxdepth 1 -type f -name '*.sql' | sort); do
  name=$(basename "$file")

  echo "Upload migration: $name"
  ssh "$SSH_HOST" "mkdir -p '$REMOTE_PATH/database/migrations'"
  scp "$file" "$SSH_HOST:$REMOTE_PATH/database/migrations/$name"

  echo "Apply migration on server: $name"
  ssh "$SSH_HOST" "cd '$REMOTE_PATH' && MIGRATION_NAME='$name' '$REMOTE_PHP_BIN' scripts/remote-apply-migration.php"
done

echo "Remote migrations completed."
