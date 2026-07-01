# syntax=docker/dockerfile:1

FROM node:20-alpine AS node-builder
WORKDIR /var/www/html

COPY package*.json ./
COPY vite.config.js ./
COPY resources/css ./resources/css
COPY resources/js ./resources/js
RUN npm install
RUN npm run build

FROM composer:2 AS composer-builder
WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y --no-install-recommends git unzip libzip-dev libpng-dev libjpeg-dev libfreetype6-dev libicu-dev zlib1g-dev libonig-dev pkg-config gcc g++ make autoconf libc-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd opcache zip

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_MEMORY_LIMIT=-1

COPY . .
RUN composer install --no-dev --no-interaction --optimize-autoloader --prefer-dist --ignore-platform-reqs --no-scripts
RUN composer dump-autoload --optimize

FROM php:8.3-fpm-alpine
WORKDIR /var/www/html

RUN apk add --no-cache bash git icu-dev libxml2-dev oniguruma-dev libpng-dev libjpeg-turbo-dev freetype-dev zlib-dev libzip-dev curl zip unzip build-base autoconf
RUN docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd opcache zip \
    && pecl install apcu \
    && docker-php-ext-enable apcu

COPY --from=composer-builder /var/www/html/vendor ./vendor
COPY --from=node-builder /var/www/html/public/build ./public/build
COPY . .

RUN cp .env.example .env && \
    php artisan key:generate --ansi && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
