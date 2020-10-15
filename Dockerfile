# Stage: Build front-end assets

FROM node:12.19.0-alpine3.11 AS builder

WORKDIR /app

COPY package.json .
COPY package-lock.json .
COPY webpack.mix.js .
COPY .eslintrc.js .
COPY resources/css resources/css
COPY resources/js resources/js

RUN npm ci
RUN npm run production


# Stage: PHP app

FROM webdevops/php-nginx:7.4

EXPOSE 80

USER 1000:1000

WORKDIR /app

COPY --chown=1000:1000 composer.json .
COPY --chown=1000:1000 composer.lock .
COPY --chown=1000:1000 database/seeders database/seeders
COPY --chown=1000:1000 database/factories database/factories

RUN composer install --optimize-autoloader --no-dev --prefer-dist --no-scripts && \
    composer clear-cache

COPY --chown=1000:1000 . .
COPY --chown=1000:1000 --from=builder /app/public/css public/css
COPY --chown=1000:1000 --from=builder /app/public/js public/js
