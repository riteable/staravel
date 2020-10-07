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
