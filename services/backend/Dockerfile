FROM php:8.3-fpm-alpine

RUN apk update \
    && apk add libpq-dev \
    &&  docker-php-ext-install pdo pdo_pgsql pgsql \
    && rm -rf /var/cache/apk/*


COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN addgroup -g 1000 maxim && adduser -u 1000 -G maxim -h /home/maxim -D maxim && addgroup maxim www-data

USER maxim
WORKDIR /var/www/html
CMD php artisan serve --host=0.0.0.0