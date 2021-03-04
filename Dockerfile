# Stage: Build front-end assets

FROM node:12.19.0-alpine3.11 AS builder

WORKDIR /app

COPY package.json .
COPY package-lock.json .

RUN npm ci

COPY resources/css resources/css
COPY resources/js resources/js
COPY resources/img resources/img
COPY webpack.common.js .
COPY webpack.prod.js .
COPY .env .

RUN npm run prod

RUN rm .env

# Stage: PHP app

FROM webdevops/php-nginx:7.4

EXPOSE 80

USER 1000:1000

WORKDIR /app

RUN mkdir -p storage/app/public \
    storage/logs \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/testing \
    storage/framework/views

COPY --chown=1000:1000 composer.json .
COPY --chown=1000:1000 composer.lock .
COPY --chown=1000:1000 database/seeders database/seeders
COPY --chown=1000:1000 database/factories database/factories

RUN composer install --optimize-autoloader --no-dev --prefer-dist --no-scripts && \
    composer clear-cache

COPY --chown=1000:1000 . .
COPY --chown=1000:1000 --from=builder /app/public/css public/css
COPY --chown=1000:1000 --from=builder /app/public/js public/js
