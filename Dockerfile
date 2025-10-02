FROM composer:latest as composer
COPY ./src /app
RUN composer install

FROM jakubboucek/lamp-devstack-php:latest
COPY --from=composer /app /var/www/html
RUN chown -R www-data:www-data /var/www/html
