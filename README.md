# Brand Toplist (Laravel)

A small CRUD application to manage country-specific toplists of brands.
Backend: Laravel 11 (PHP 8.2+)  
Frontend: simple mobile-friendly HTML/CSS in `public/toplist.html`

## Features
- RESTful API for brands (`/api/brands`)
- Brand fields: `brand_id`, `brand_name`, `brand_image` (URL), `rating`, `country` (ISO-2)
- Geolocation-based toplist using Cloudflare `CF-IPCountry` header
- Local testing via query param `?country=XX`
- Dockerized app + MySQL (dev-friendly configuration)
- Seeder with sample `default`, `CM`, `BG`, and `MT` toplists

## Quick local (no Docker)
1. Clone repo:
```bash
git clone https://github.com/<you>/brand-toplist.git
cd brand-toplist
2. Install PHP deps:
composer install
cp .env.example .env
# configure DB in .env (SQLite recommended for quick start)
touch database/database.sqlite
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve

# Docker (recommended for consistent environment)
1. docker-compose up --build -d
## optional: run migrations if not auto-run
2. docker-compose exec app php artisan migrate --force
3. docker-compose exec app php artisan db:seed --force

4. Open: http://127.0.0.1:8000/toplist.html
