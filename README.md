## Create Laravel Project

composer create-project laravel/laravel=8.0 backend-project

## env

cp .env.example .env
php artisan key:generate
npm install

## Setup Mongodb

composer require jenssegers/mongodb

### add in config/app.php
Jenssegers\Mongodb\MongodbServiceProvider::class,
### add in config/database.php
```
'mongodb' => [
    'driver' => 'mongodb',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', 27017),
    'database' => env('DB_DATABASE', 'homestead'),
    'username' => env('DB_USERNAME', 'homestead'),
    'password' => env('DB_PASSWORD', 'secret'),
    'options' => [
        // here you can pass more settings to the Mongo Driver Manager
        // see https://www.php.net/manual/en/mongodb-driver-manager.construct.php under "Uri Options" for a list of complete parameters that you can use

        'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
    ],
],
```


## Setup JWT
composer require tymon/jwt-auth

php artisan vendor:publish

pilih 'Tymon\JWTAuth\Providers\LaravelServiceProvider'

php artisan jwt:secret