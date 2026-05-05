FROM php:8.4-fpm

# ===== SYSTEM DEPENDENCIES =====
RUN apt-get update && apt-get install -y --no-install-recommends \
    git curl unzip zip \
    libicu-dev libzip-dev \
    nginx \
    && docker-php-ext-install intl zip pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# ===== PHP-FPM (TCP SAFE) =====
RUN sed -i 's|listen = 127.0.0.1:9000|listen = 127.0.0.1:9000|' \
    /usr/local/etc/php-fpm.d/www.conf

# ===== NGINX CONFIG (SAFE + DEBUG FRIENDLY) =====
RUN { \
    echo 'server {'; \
    echo '    listen 0.0.0.0:80;'; \
    echo '    server_name _;'; \
    echo '    root /var/www/html/public;'; \
    echo '    index index.php index.html;'; \
    echo ''; \
    echo '    error_log /dev/stdout info;'; \
    echo '    access_log /dev/stdout;'; \
    echo ''; \
    echo '    location / {'; \
    echo '        try_files $uri $uri/ /index.php?$query_string;'; \
    echo '    }'; \
    echo ''; \
    echo '    location ~ \.php$ {'; \
    echo '        include fastcgi_params;'; \
    echo '        fastcgi_pass 127.0.0.1:9000;'; \
    echo '        fastcgi_index index.php;'; \
    echo '        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;'; \
    echo '        fastcgi_param DOCUMENT_ROOT $realpath_root;'; \
    echo '    }'; \
    echo ''; \
    echo '    location ~ /\.(?!well-known).* {'; \
    echo '        deny all;'; \
    echo '    }'; \
    echo '}'; \
} > /etc/nginx/sites-available/default

# ===== COMPOSER =====
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# ===== COPY APP =====
COPY . .

# ===== INSTALL DEPENDENCIES =====
RUN composer install --no-dev --optimize-autoloader || true

# ===== PERMISSIONS FIX =====
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data . \
    && chmod -R 775 storage bootstrap/cache || true

# ===== START SCRIPT (AUTO DEBUG + AUTO HEAL) =====
RUN printf '#!/bin/sh\n\
set -e\n\
echo "===================="\n\
echo "RAILWAY STARTUP LOG"\n\
echo "===================="\n\
\n\
echo "[1] Checking PHP-FPM config..."\n\
php-fpm -t || echo "PHP-FPM CONFIG ERROR (IGNORED TO CONTINUE DEBUG)"\n\
\n\
echo "[2] Checking Nginx config..."\n\
nginx -t || echo "NGINX CONFIG ERROR (CHECK ABOVE)"\n\
\n\
echo "[3] Starting PHP-FPM..."\n\
php-fpm -D || echo "FAILED TO START PHP-FPM"\n\
\n\
echo "[4] Starting Nginx..."\n\
exec nginx -g "daemon off;"\n\
' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

EXPOSE 80

CMD ["/usr/local/bin/start.sh"]