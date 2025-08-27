# Dockerfile
FROM php:8.2-apache

# System deps
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip libicu-dev libonig-dev libpng-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql intl mbstring zip exif pcntl \
    && a2enmod rewrite

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app
COPY . /var/www/html

# Install composer deps
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# Run migrations & seed at container start (optional behavior: comment if you prefer manual)
CMD php artisan migrate --force && php artisan db:seed --force && apache2-foreground
