FROM php:8.2-apache-bullseye

RUN apt-get update && apt-get install -y --no-install-recommends \
    zip unzip git curl libonig-dev libxml2-dev libzip-dev libpq-dev libpng-dev ca-certificates openssl \
    && update-ca-certificates \
    && docker-php-ext-install pdo pdo_mysql mbstring xml zip gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . .

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
