FROM php:8.3-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN addgroup -g 1000 maxim && adduser -u 1000 -G maxim -h /home/maxim -D maxim && addgroup maxim www-data

USER maxim
WORKDIR /var/www/html