FROM php:8.2-apache

RUN apt-get update
RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip
RUN apt-get clean

WORKDIR /tmp
RUN php -r "copy('https://getcomposer.org/download/2.8.11/composer.phar', 'composer.phar');"

COPY ./docker/apache-vhost.conf /etc/apache2/sites-available/001-hichxm.conf
RUN a2dissite 000-default
RUN a2ensite 001-hichxm

RUN a2enmod rewrite

COPY ./ /opt/website
WORKDIR /opt/website

RUN php /tmp/composer.phar install --no-dev