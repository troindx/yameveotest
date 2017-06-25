FROM phpdockerio/php7-fpm

MAINTAINER Marc Lopez <marc5.12@outlook.com>

ENV USER friends
ENV FOLDER /app/$USER

### Application specific stuff ###

RUN useradd -m -u 888 $USER \
    && apt-get update \
    && apt-get install netcat -y -qq \
    && rm -rf /var/cache/apt/

RUN curl -sS https://getcomposer.org/installer \
    | php && mv composer.phar /usr/local/bin/composer;

# Set the workdir to the base app
WORKDIR $FOLDER

# COPY PHP-FPM CONFIG
COPY confs/php-fpm-7.conf /usr/local/etc/php-fpm.conf
COPY confs/php.ini /usr/local/etc/php/php.ini

VOLUME ["$FOLDER"]

ENTRYPOINT exec /run.sh
