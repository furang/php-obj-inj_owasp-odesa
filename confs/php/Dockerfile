FROM php:7-fpm
RUN apt update && apt -y install git unzip zlib1g-dev
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer