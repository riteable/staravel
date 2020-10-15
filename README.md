# Larawire

A basic Laravuxt + Livewire project template.

## Usage

To start the project for development, install dependencies:

```
$ composer install
$ npm install
```

Create an `.env` file, and set variables as needed:

```
$ cp .env.example .env
```

Generate a Laravel app key:

```
$ php artisan key:generate
```

Run application:

```
$ make up
```

This is a shortcut for the `docker-compose up --build` command, which starts all the necessary containers for the application to run.

To stop all the containers run the following:

```
$ make down
```

## Migrations

To run the database migrations, go inside the app container, and execute the command:

```
$ docker exec -it larawire-app bash
$ php artisan migrate
```
