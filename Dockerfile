FROM php:8.4-apache

# install dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip zip libicu-dev libzip-dev \
    && docker-php-ext-install intl zip pdo pdo_mysql

# disable ALL MPM modules to avoid "More than one MPM loaded" conflict, then enable mod_rewrite
RUN a2dismod mpm_prefork
RUN a2dismod mpm_worker
RUN a2dismod mpm_event
RUN a2enmod rewrite

# set document root to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# set correct permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

CMD ["apache2-foreground"]
