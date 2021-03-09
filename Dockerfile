#--- Stage: Base image

FROM webdevops/php-nginx:7.4 AS base

USER 1000:1000

WORKDIR /app

RUN mkdir -p storage/app/public \
    storage/logs \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/testing \
    storage/framework/views

#--- Stage: Test

FROM base as test

COPY --chown=1000:1000 . .

RUN composer install \
    --no-interaction \
    --prefer-dist \
    --no-scripts \
    && composer clear-cache

RUN ./vendor/bin/phpcs
RUN ./vendor/bin/phpstan analyse --memory-limit=2G --no-progress
RUN php artisan test

#--- Stage: Build front-end assets

FROM node:14.16.0-buster-slim AS build

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

#--- Stage: PHP app

FROM base AS production

EXPOSE 80

COPY --chown=1000:1000 --from=test /app/composer.* ./

RUN composer install \
    --no-interaction \
    --optimize-autoloader \
    --no-dev \
    --prefer-dist \
    --no-scripts \
    && composer clear-cache

COPY --chown=1000:1000 . .
COPY --chown=1000:1000 --from=build /app/public/assets-manifest.json public/assets-manifest.json
COPY --chown=1000:1000 --from=build /app/public/web-manifest.json public/web-manifest.json
COPY --chown=1000:1000 --from=build /app/public/img public/img
COPY --chown=1000:1000 --from=build /app/public/css public/css
COPY --chown=1000:1000 --from=build /app/public/js public/js
