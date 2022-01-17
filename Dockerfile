FROM php:8.1-cli-alpine

RUN apk update \
    && apk upgrade \
    && apk add --no-cache bash \
    && apk add --no-cache git \
    && rm -rf /var/cache/apk/*

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY ./application /usr/src/hsa_app

WORKDIR /usr/src/hsa_app

ENV PHP_MEMORY_LIMIT=2G

CMD composer install
