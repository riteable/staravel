# Staravel

An opinionated Laravel starter template.

## Why

I found myself doing a lot of repetitive stuff before I could really start working on a project, so I've included most of the necessary setup (that I personally need) in this starter template. I've open sourced it in case anyone finds it useful.

How it differs from a blank Laravel starter project:

- Contains ready to use [Docker Compose](https://docs.docker.com/compose/) and [Swarm](https://docs.docker.com/engine/swarm/) configuration for development and production setups.
- Uses plain [Webpack](https://webpack.js.org/) configs instead of Laravel Mix.
- [Redis](https://redis.io/) for caching and sessions.
- [PostgreSQL](https://www.postgresql.org/) for general data storage.
- Queue worker runs in a separate container, and is scalable with Docker Swarm.
- Queue connection is set to Redis by default.
- Exceptions log to `stderr` by default.
- Compatible with [nginx-proxy](https://github.com/nginx-proxy/nginx-proxy) and [letsencrypt-nginx-proxy-companion](https://github.com/nginx-proxy/docker-letsencrypt-nginx-proxy-companion).
- Front-end assets included: [Alpine.js](https://github.com/alpinejs/alpine), [Heroicons](https://heroicons.com/), [Bulma](https://bulma.io/).
- Light/dark theme switching enabled by default.
- Includes [Fortify](https://laravel.com/docs/fortify) and custom auth views.
- Pre-commit linting ([phpcs](https://github.com/squizlabs/PHP_CodeSniffer), [phpstan](https://github.com/phpstan/phpstan)) and testing included.
- Commit linting based on [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/).
- Basic role-based auth, with `user` and `admin` roles.

## Requirements

- PHP 7
- Composer 2
- Node.js
- Docker
- Docker Compose
- GNU Make

## Usage

**Step 1: Install packages**

Install packages using `npm` and `composer`:

```
$ composer install
$ npm install
```

**Step 2: Set environment variables**

Create an `.env` file, and set variables as needed:

```
$ cp .env.example .env
```

**Step 3: App key**

Generate a Laravel app key using `artisan`:

```
$ php artisan key:generate
```

**Step 4: Start server**

Build and run Docker containers using `make`:

```
$ make up
```

This is a shortcut for the `docker-compose up --build` command, which starts all the necessary containers for the application to run. See [`Makefile`](https://github.com/riteable/staravel/blob/master/Makefile) in the project root for more helpful shortcut commands.

**Step 5: Start webpack watch**

Build front-end assets and watch for changes:

```
$ npm run dev
```

You can view the website on `http://localhost:8000` (or other port if you've changed the `APP_PORT` environment variable).

## Migrations

To run database migrations, go inside the app container:

```
$ make it
```

and execute the migration command:

```
$ php artisan migrate
```

## Mail

Setup mail before you try to register a user, so you can receive an activation link. The `MAIL_*` environment variables are preset to work with Gmail SMTP.

**NOTE:** If you're using Gmail SMTP with a Google account which has 2FA enabled, you will need to create an [App Password](https://support.google.com/accounts/answer/185833) and use that as your `MAIL_PASSWORD`.

## Admin

To give a user admin privileges, go inside the app container:

```
$ make it
```

and execute the `user:admin` command:

```
$ php artisan user:admin <name>
```

The `User` model contains an `isAdmin()` method to check if the user has an `'admin'` role.

## Authorization

`AuthServiceProvider` defines an `access-admin` gate, which grants access to admin users. The `/admin` route has this gate enabled by default via the `can:access-admin` middleware. See [`routes/web.php`](https://github.com/riteable/staravel/blob/master/routes/web.php) for more.
