FROM php:7.2-apache

RUN apt-get clean

RUN apt-get update && apt-get install -y \
        default-libmysqlclient-dev \
        libicu-dev \
        libbz2-dev \
        libmemcached-dev \
        libsasl2-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libpq-dev \
        libxml2-dev \
        iputils-ping \
        nano \
        curl \
    && docker-php-ext-install bcmath bz2 calendar iconv intl mbstring mysqli opcache pdo_mysql pdo_pgsql pgsql soap zip

RUN apt-get -qy autoremove

EXPOSE 80