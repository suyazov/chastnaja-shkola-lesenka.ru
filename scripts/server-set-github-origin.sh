#!/bin/sh
set -eu

if [ "$#" -lt 3 ]; then
  echo "Usage: $0 <ssh_host> <remote_wp_path> <new_github_repo_ssh_url>"
  echo "Example: $0 myserver /var/www/fastuser/data/www/chastnaja-shkola-lesenka.ru git@github.com:new-owner/chastnaja-shkola-lesenka.ru.git"
  exit 1
fi

SSH_HOST="$1"
REMOTE_PATH="$2"
NEW_REMOTE_URL="$3"

ssh "$SSH_HOST" "cd '$REMOTE_PATH' && git remote set-url origin '$NEW_REMOTE_URL' && git remote -v"

echo "GitHub origin updated on server."