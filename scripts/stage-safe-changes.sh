#!/bin/sh
set -eu

# Stage only project-level changes and avoid accidental WordPress core updates.
git add -f .env.example
git add README.md docker-compose.yml .gitignore scripts/ database/migrations/ wp-content/themes/lebari-theme/ wp-config.example.php

echo "Staged safe project changes."
git status --short