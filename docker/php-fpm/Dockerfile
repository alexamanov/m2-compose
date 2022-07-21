FROM php:8.1-fpm

#Install xdebug
RUN apt-get update && apt-get install -y wget git unzip \
	&& pecl install xdebug-3.1.3 \
	&& docker-php-ext-enable xdebug

#Configure permissions
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data && \
    chsh -s /bin/bash www-data

RUN usermod -aG sudo www-data

USER www-data