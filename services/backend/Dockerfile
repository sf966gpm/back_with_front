FROM php:8.3-fpm-alpine

#RUN apk --no-cache update \
#        && apk add --no-cache autoconf g++ make \
#        postgresql-dev \
#        \
#        && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#        \
#        && docker-php-ext-install pdo_pgsql

RUN apk add libpq-dev \
    &&  docker-php-ext-install pdo pdo_pgsql pgsql


COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN addgroup -g 1000 maxim && adduser -u 1000 -G maxim -h /home/maxim -D maxim && addgroup maxim www-data

USER maxim
WORKDIR /var/www/html