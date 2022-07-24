FROM php:8.1-fpm

# Install dependencies
RUN apt-get update \
&& apt-get install -y \
procps \
libcurl4-openssl-dev \
libfreetype6-dev \
libldap2-dev \
libicu-dev \
libjpeg62-turbo-dev \
libmcrypt-dev \
libpng-dev \
libxslt1-dev \
libzip-dev \
libsodium-dev \
libonig-dev \
libpq-dev \
npm \
webp \
optipng \
jpegoptim \
jq \
gifsicle \
sudo

# Mail
RUN curl -Lsf 'https://storage.googleapis.com/golang/go1.8.3.linux-amd64.tar.gz' | tar -C '/usr/local' -xvzf -
ENV PATH /usr/local/go/bin:$PATH
RUN go get github.com/mailhog/mhsendmail
RUN cp /root/go/bin/mhsendmail /usr/bin/mhsendmail

# Configure the gd library
RUN docker-php-ext-configure \
gd --with-freetype --with-jpeg

#Install xdebug
RUN apt-get update && apt-get install -y wget git unzip \
	&& pecl install xdebug-3.1.3 \
	&& docker-php-ext-enable xdebug

#Install php ext
RUN docker-php-ext-install \
pdo_mysql \
soap \
bcmath \
gd \
xsl \
zip \
sockets \
intl

#Configure permissions
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data && \
	chsh -s /bin/bash www-data

RUN find /var/www/html -type d -exec chmod 755 {} \;
RUN	find /var/www/html -type f -exec chmod 644 {} \;

RUN usermod -aG sudo www-data

USER www-data
