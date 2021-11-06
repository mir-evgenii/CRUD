FROM php:7.3.5-apache-stretch

RUN apt-get update && docker-php-ext-install pdo_mysql && a2enmod rewrite && service apache2 restart

