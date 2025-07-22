# web-ui/Dockerfile

FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Install MySQLi
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy source code to Apache web directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/
