FROM php:7-apache

RUN apt-get update -y && apt-get install -y

RUN docker-php-ext-install mysqli

RUN service apache2 restart

COPY ./src/ /var/www/html/

EXPOSE 80
EXPOSE 443