# Brand Toplist (Laravel)

A small CRUD application to manage country-specific toplists of brands.  
Backend: **Laravel 11 (PHP 8.2+)**  
Frontend: **simple mobile-friendly HTML/CSS** in `public/toplist.html`

**Live Demo:** [https://njangi.app/toplist.html](https://njangi.app/toplist.html)

---

## Features
- RESTful API for brands (`/api/brands`)
- Brand fields: `brand_id`, `brand_name`, `brand_image` (URL), `rating`, `country` (ISO-2)
- **Geolocation-based toplist**:  
  - User’s country is automatically determined by Laravel using the `CF-IPCountry` HTTP header provided by Cloudflare  
  - For local testing, you can override via query param: `?country=XX`
- Seeder with sample `default`, `CM`, `BG`, and `MT` toplists
- Dockerized app + MySQL (dev-friendly configuration)

---

## Quick Local Setup (no Docker)
1. Clone repo:
   ```bash
   git clone https://github.com/brunostar/brand-toplist.git
   cd brand-toplist ```

2. Install PHP dependencies:
    ```bash
    composer install
    cp .env.example .env```

3. Configure DB in .env (SQLite recommended for quick start):
    ```bash
    touch database/database.sqlite
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve```

4. Open in browser: http://127.0.0.1:8000/toplist.html

## Docker Setup (recommended)
1. Build and start containers:
    ```bash
    docker-compose up --build -d ```

2. (Optional) Run migrations + seeders if not auto-run:
    ```bash
    docker-compose exec app php artisan migrate --force
    docker-compose exec app php artisan db:seed --force```

3. Open in browser: http://127.0.0.1:8000/toplist.html


## API Reference
- ```GET /api/brands``` → List brands (filtered by detected country)
- ```POST /api/brands``` → Create a brand
- ```PUT /api/brands/{id}``` → Update a brand
- ```DELETE /api/brands/{id}``` → Delete a brand


