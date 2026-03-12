# chastnaja-shkola-lesenka.ru

Локальная разработка WordPress-сайта с базой данных, GitHub и деплоем на production-сервер.

## Что уже есть

- Полная копия файлов WordPress в корне проекта.
- Дамп production-базы в `database/production.sql`.
- GitHub-репозиторий уже подключен как `origin`.
- На сервере есть простой deploy hook: `deploy.php` вызывает `deploy.sh`, а тот делает `git pull origin main`.

## Рекомендуемый поток работы

1. Работаете локально в VS Code.
2. Поднимаете локальный WordPress и MariaDB через Docker.
3. Импортируете production-базу в локальную MariaDB.
4. Вносите изменения в код и, при необходимости, в базу.
5. Коммитите изменения в GitHub.
6. На сервере обновляете код через `git pull` или через уже существующий `deploy.php`.
7. Изменения в production-базу применяете отдельно, осознанно и только через SQL-миграции или ручной импорт подготовленного дампа.

## Важно про базу и Git

Базу данных нельзя надежно "синхронизировать через git" так же, как PHP-файлы. Правильный подход:

- В git храним код, конфиги-шаблоны и при необходимости SQL-миграции.
- Полные дампы базы в git не коммитим.
- Для воспроизводимых изменений БД сохраняем SQL-скрипты в отдельной папке, например `database/migrations/`.
- Для разовых правок контента используем экспорт/импорт дампов вне git.

## Быстрый старт

### 1. Подготовка `.env`

```bash
cp .env.example .env
```

При необходимости поменяйте порты и пароли в `.env`.

### 2. Поднять контейнеры

```bash
docker compose up -d
```

Откроются:

- WordPress: `http://localhost:8080`
- phpMyAdmin: `http://localhost:8081`

### 3. Импортировать production-базу локально

```bash
chmod +x scripts/import-db.sh scripts/export-db.sh
./scripts/import-db.sh
```

### 4. Работать в VS Code

Редактируйте тему, плагины и остальные файлы прямо в проекте. Контейнер WordPress использует эту папку как рабочую директорию.

## Как вносить изменения в БД правильно

Есть два сценария:

### Сценарий 1. Локальные временные правки

Если меняете данные руками через админку WordPress или phpMyAdmin, потом выгружайте локальную БД:

```bash
./scripts/export-db.sh
```

Это создает `database/local.sql` для резервной копии или ручного импорта.

### Сценарий 2. Изменения, которые надо переносить на production

Для изменений структуры или предсказуемых данных создавайте SQL-файлы в `database/migrations/` и применяйте их отдельно на сервере.

Примеры:

- создание таблицы
- изменение опций WordPress
- массовое обновление метаданных

Такой подход лучше, чем коммитить полный дамп после каждой правки.

## Работа с GitHub

Проверить remote:

```bash
git remote -v
```

Обычный цикл:

```bash
git status
./scripts/stage-safe-changes.sh
git commit -m "Describe changes"
git push origin main
```

`stage-safe-changes.sh` специально не добавляет изменения ядра WordPress (`wp-admin`, `wp-includes`).

## Отделение изменений ядра WordPress

Сейчас в рабочем дереве есть изменения в ядре WordPress. Чтобы не утащить их в ваш рабочий коммит:

- используйте `./scripts/stage-safe-changes.sh`
- проверяйте staged-файлы через `git diff --cached --name-only`
- коммитьте только проектные изменения (тема, скрипты, docker, migrations)

Если позже решите обновлять/коммитить ядро, делайте это отдельным коммитом и отдельно тестируйте.

## SQL-миграции (воспроизводимо)

Применить миграции локально:

```bash
chmod +x scripts/apply-migrations.sh scripts/apply-migrations-remote.sh scripts/stage-safe-changes.sh
./scripts/apply-migrations.sh
```

Применить миграции на сервере по SSH:

```bash
./scripts/apply-migrations-remote.sh myserver /var/www/fastuser/data/www/chastnaja-shkola-lesenka.ru
```

Скрипты ведут журнал в таблице `wp_schema_migrations`, поэтому повторно одну и ту же миграцию не применяют.

## Деплой на сервер

Если на сервере раньше был старый GitHub-аккаунт, перенастройте remote:

```bash
./scripts/server-set-github-origin.sh myserver /var/www/fastuser/data/www/chastnaja-shkola-lesenka.ru git@github.com:<NEW_OWNER>/chastnaja-shkola-lesenka.ru.git
```

Дополнительно на сервере проверьте доступ к GitHub-ключу:

```bash
ssh myserver
ssh -T git@github.com
```

После этого `deploy.sh` с `git pull origin main` продолжит работать, но уже с новым GitHub-аккаунтом.

Важно: деплой обновляет файлы. Изменения в базе выкатывайте миграциями.

## Что не коммитить

В репозиторий не должны попадать:

- `.env`
- `wp-config.php` с production-секретами
- дампы базы
- кэш
- `uploads`, если не хотите раздувать репозиторий

## Удаление секретов из истории GitHub

Если `wp-config.php` уже попадал в commits, одного `.gitignore` недостаточно.

Нужно переписать историю и принудительно запушить:

```bash
brew install git-filter-repo
git filter-repo --path wp-config.php --invert-paths
git push origin --force --all
git push origin --force --tags
```

После этого обязательно:

- сменить пароли БД и ключи/соли в `wp-config.php`
- обновить доступы на сервере
- предупредить всех, кто работает с репозиторием, что история переписана

## Текущая миграция

В проект уже добавлена миграция:

- `database/migrations/20260312_001_home_aftercare_and_seo.sql`

Она делает две вещи:

- заменяет заголовок главной страницы на SEO-версию (без слова "Главная")
- заполняет ACF-поля блока "Продленка" для `post_id=13`