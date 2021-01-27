FROM php:apache
ENV XDEBUG_REMOTE_HOST localhost
COPY . /var/www/html
WORKDIR /var/www/html

RUN apt-get update && apt-get install -yq vim git software-properties-common python3-software-properties wget gnupg libzip-dev zip unzip libicu-dev

RUN pecl install xdebug-3.0.1 \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip \
    && docker-php-ext-enable zip

ADD ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
#
## Install Composer CLI command
#ADD ./install_composer.sh /usr/local/bin/install_composer.sh
#RUN chmod +x /usr/local/bin/install_composer.sh
#RUN sed -i -re "s/\r$//" /usr/local/bin/install_composer.sh
#
#RUN install_composer.sh
#
#RUN composer install
#RUN composer dump-autoload
#
#RUN a2enmod rewrite