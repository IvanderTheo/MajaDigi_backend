FROM php:8.4-fpm

# Install system dependencies and Apache in a single layer.
# apache2 is installed first so that a2enmod commands in the next layer succeed.
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git curl unzip zip \
        libicu-dev libzip-dev \
        apache2 \
        libapache2-mod-fcgid \
    && docker-php-ext-install intl zip pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Ensure only mpm_prefork is active; enable proxy modules for PHP-FPM.
# Step 1 – Scrub apache2.conf of any LoadModule lines for the competing MPMs
#          and append an explicit LoadModule for mpm_prefork only.
#          This prevents Apache from ever seeing more than one MPM directive,
#          regardless of what symlinks exist in mods-enabled/.
RUN sed -i \
        -e '/LoadModule mpm_worker_module/d' \
        -e '/LoadModule mpm_event_module/d' \
        -e '/LoadModule mpm_prefork_module/d' \
        /etc/apache2/apache2.conf \
    && echo 'LoadModule mpm_prefork_module /usr/lib/apache2/modules/mod_mpm_prefork.so' \
        >> /etc/apache2/apache2.conf
# Step 2 – Remove the mods-enabled symlinks for the competing MPMs so that
#          Apache's own module loader does not pick them up a second time.
RUN a2dismod mpm_event mpm_worker 2>/dev/null || true \
    && a2enmod mpm_prefork \
    && a2enmod proxy_fcgi setenvif rewrite

# Configure Apache virtual host: document root → Laravel public/, proxy PHP to FPM
RUN { \
    echo '<VirtualHost *:80>'; \
    echo '    DocumentRoot /var/www/html/public'; \
    echo '    <Directory /var/www/html/public>'; \
    echo '        AllowOverride All'; \
    echo '        Require all granted'; \
    echo '        Options -Indexes +FollowSymLinks'; \
    echo '    </Directory>'; \
    echo '    # Forward PHP requests to the local PHP-FPM socket'; \
    echo '    <FilesMatch "\.php$">'; \
    echo '        SetHandler "proxy:unix:/run/php-fpm.sock|fcgi://localhost"'; \
    echo '    </FilesMatch>'; \
    echo '    ErrorLog ${APACHE_LOG_DIR}/error.log'; \
    echo '    CustomLog ${APACHE_LOG_DIR}/access.log combined'; \
    echo '</VirtualHost>'; \
} > /etc/apache2/sites-available/000-default.conf

# Configure PHP-FPM to listen on a Unix socket that Apache can reach
RUN sed -i 's|listen = 127.0.0.1:9000|listen = /run/php-fpm.sock|' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's|;listen.owner = www-data|listen.owner = www-data|' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's|;listen.group = www-data|listen.group = www-data|' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's|;listen.mode = 0660|listen.mode = 0660|' /usr/local/etc/php-fpm.d/www.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# Set correct ownership for Laravel writable directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Startup script: launch PHP-FPM in the background, then run Apache in the foreground.
# apache2ctl -D FOREGROUND is used instead of apache2-foreground — the latter is only
# available in the official apache2 Docker image, not in php:fpm-based images.
RUN printf '#!/bin/sh\nset -e\nphp-fpm --daemonize\nexec apache2ctl -D FOREGROUND\n' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

EXPOSE 80

CMD ["/usr/local/bin/start.sh"]
