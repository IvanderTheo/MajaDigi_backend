FROM php:8.4-fpm

# Install dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    git curl unzip zip \
    libicu-dev libzip-dev \
    nginx \
    && docker-php-ext-install intl zip pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# PHP-FPM → TCP (NO SOCKET, SAFE FOR RAILWAY)
RUN sed -i 's|listen = 127.0.0.1:9000|listen = 127.0.0.1:9000|' /usr/local/etc/php-fpm.d/www.conf

# Nginx config (FIXED)
RUN { \
    echo 'server {'; \
    echo '    listen 0.0.0.0:80;'; \
    echo '    root /var/www/html/public;'; \
    echo '    index index.php index.html;'; \
    echo ''; \
    echo '    location / {'; \
    echo '        try_files $uri $uri/ /index.php?$query_string;'; \
    echo '    }'; \
    echo ''; \
    echo '    location ~ \.php$ {'; \
    echo '        include fastcgi_params;'; \
    echo '        fastcgi_pass 127.0.0.1:9000;'; \
    echo '        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;'; \
    echo '        fastcgi_param DOCUMENT_ROOT $realpath_root;'; \
    echo '    }'; \
    echo ''; \
    echo '    location ~ /\.(?!well-known).* {'; \
    echo '        deny all;'; \
    echo '    }'; \
    echo '}'; \
} > /etc/nginx/sites-available/default

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions FIX
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Startup script
RUN printf '#!/bin/sh\nset -e\nphp-fpm -D\nexec nginx -g "daemon off;"\n' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

EXPOSE 80

CMD ["/usr/local/bin/start.sh"]