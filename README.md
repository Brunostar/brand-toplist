# Brand Toplist (Laravel)

A small CRUD + geolocation-based toplist app (Laravel backend, HTML/CSS frontend).

## Quick start (local)
- PHP 8.2, Composer
- Uses SQLite by default

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan serve
```

## Roadmap:

- CRUD for brands (API)

- Geolocation via CF-IPCountry header (with default)

- Mobile-friendly frontend

- Docker (app + DB)

- Seeders + tests

- Detailed README