# syntax=docker/dockerfile:1

FROM node:20-alpine AS node-builder
WORKDIR /var/www/html

COPY package*.json ./
COPY vite.config.js ./
COPY resources/css ./resources/css
COPY resources/js ./resources/js
RUN npm install
RUN npm run build

FROM php:8.3-cli-alpine AS composer-builder
WORKDIR /var/www/html

RUN apk add --no-cache bash git icu-dev libxml2-dev oniguruma-dev libpng-dev libjpeg-turbo-dev freetype-dev zlib-dev libzip-dev curl zip unzip
RUN docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd opcache zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --optimize-autoloader --prefer-dist

FROM php:8.3-fpm-alpine
WORKDIR /var/www/html

RUN apk add --no-cache bash git icu-dev libxml2-dev oniguruma-dev libpng-dev libjpeg-turbo-dev freetype-dev zlib-dev libzip-dev curl zip unzip
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
