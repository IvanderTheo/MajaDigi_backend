FROM php:8.4-fpm

# Install system dependencies and Apache.
# Pin mpm_prefork via apt to prevent mpm_worker/mpm_event from being pulled in,
# then remove the other MPM packages entirely so they can never be loaded.
RUN apt-get update && apt-get install -y \
        git curl unzip zip \
        libicu-dev libzip-dev \
        apache2 \
        libapache2-mod-fcgid \
    && docker-php-ext-install intl zip pdo pdo_mysql \
    # Remove competing MPM packages at the Debian level so they cannot be loaded
    && apt-get remove -y libapache2-mod-php* apache2-mpm-worker apache2-mpm-event 2>/dev/null || true \
    && apt-get autoremove -y \
    && rm -rf /var/lib/apt/lists/*

# Ensure only mpm_prefork is active; enable proxy modules for PHP-FPM
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

# Startup script: launch PHP-FPM in the background, then run Apache in the foreground
RUN printf '#!/bin/sh\nset -e\nphp-fpm --daemonize\nexec apache2-foreground\n' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

EXPOSE 80

CMD ["/usr/local/bin/start.sh"]
