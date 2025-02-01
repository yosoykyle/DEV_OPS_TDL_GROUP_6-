# Use the official PHP image with Apache
FROM php:8.0-apache

# Install necessary extensions
RUN docker-php-ext-install mysqli

# Copy your project files to the Apache server's root
COPY . /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80
