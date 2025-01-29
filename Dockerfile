# Dockerfile for the web service
# FROM php:7.4-apache
# COPY ./src /var/www/html/
# RUN docker-php-ext-install mysqli
# Start from the official PHP image with Apache
FROM php:7.4-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the src directory into the container's web server directory
COPY ./src /var/www/html/

# Install dependencies (e.g., MySQL support)
RUN docker-php-ext-install mysqli

# Expose the port Apache will run on
EXPOSE 80
