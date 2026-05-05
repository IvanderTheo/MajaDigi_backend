FROM php:8.4-fpm

# install dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip zip libicu-dev libzip-dev \
    && docker-php-ext-install intl zip pdo pdo_mysql

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

CMD ["php-fpm"]