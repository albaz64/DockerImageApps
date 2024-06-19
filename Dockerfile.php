FROM php:fpm-alpine

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/bin/

RUN chmod +x /usr/bin/install-php-extensions && \
    install-php-extensions @composer csv event exif gd http mailparse maxminddb mysqli pdo_dblib pdo_mysql pdo_pgsql pgsql php_trie soap sockets sync xdiff xmlrpc xsl yaml zip zstd