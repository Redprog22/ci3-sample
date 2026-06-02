FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libzip-dev libicu-dev unzip \
    && docker-php-ext-install mysqli pdo pdo_mysql zip gd intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf

COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 80
