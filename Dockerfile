FROM php:8.4-fpm

# Install system dependencies and Nginx (no Apache, no MPM conflicts)
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git curl unzip zip \
        libicu-dev libzip-dev \
        nginx \
    && docker-php-ext-install intl zip pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Configure PHP-FPM to listen on a Unix socket accessible by Nginx
RUN sed -i 's|listen = 127.0.0.1:9000|listen = /run/php-fpm.sock|' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's|;listen.owner = www-data|listen.owner = www-data|' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's|;listen.group = www-data|listen.group = www-data|' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's|;listen.mode = 0660|listen.mode = 0660|' /usr/local/etc/php-fpm.d/www.conf

# Write the Nginx virtual host config for Laravel
RUN { \
    echo 'server {'; \
    echo '    listen 80 default_server;'; \
    echo '    root /var/www/html/public;'; \
    echo '    index index.php index.html;'; \
    echo ''; \
    echo '    # Laravel URL rewriting'; \
    echo '    location / {'; \
    echo '        try_files $uri $uri/ /index.php?$query_string;'; \
    echo '    }'; \
    echo ''; \
    echo '    # Proxy PHP requests to PHP-FPM via Unix socket'; \
    echo '    location ~ \.php$ {'; \
    echo '        include fastcgi_params;'; \
    echo '        fastcgi_pass unix:/run/php-fpm.sock;'; \
    echo '        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;'; \
    echo '        fastcgi_param DOCUMENT_ROOT $realpath_root;'; \
    echo '    }'; \
    echo ''; \
    echo '    # Deny access to hidden files'; \
    echo '    location ~ /\.(?!well-known).* {'; \
    echo '        deny all;'; \
    echo '    }'; \
    echo '}'; \
} > /etc/nginx/sites-available/default

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# Set correct ownership for Laravel writable directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Startup script: launch PHP-FPM in the background, then run Nginx in the foreground
RUN printf '#!/bin/sh\nset -e\nphp-fpm --daemonize\nexec nginx -g "daemon off;"\n' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

EXPOSE 80

CMD ["/usr/local/bin/start.sh"]
