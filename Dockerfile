# Image of PHP with Apache
FROM php:7.2-apache

# Update environment
RUN apt-get -y update --fix-missing && \
    apt-get upgrade -y && \
    apt-get --no-install-recommends install -y apt-utils && \
    rm -rf /var/lib/apt/lists/*

# Install and enable mysqli lib
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli