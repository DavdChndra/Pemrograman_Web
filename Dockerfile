FROM php:8.2-apache

# Install ekstensi MySQLi dan PDO
RUN docker-php-ext-install mysqli pdo pdo_mysql
