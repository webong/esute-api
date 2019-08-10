# ESUTE API

A demo application to illustrate how cooperative/group savings works.

## Installation

Clone the repo locally:

```sh
git clone https://github.com/webong/esute-api.git esuteapi
cd esuteapi
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Start the app server:

```sh
php artisan server
```

Start the Queue Worker:

```sh
php artisan queue:work
```

You're ready to go! Visit Esute API Documentation on your local instance, [here](http://localhost:8000/docs/index.html):

Use Telescope on your local instance to monitor app activities like queues and mail locally, [Visit telscope here](http://localhost:8000/telescope):


## Running tests

To run the Esute API tests, run:

```
phpunit
```
