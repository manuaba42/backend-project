## Create Laravel Project
```
composer create-project laravel/laravel=8.0 backend-project
```
## env
```
cp .env.example .env
```
```
php artisan key:generate
```
```
npm install
```

## Setup Mongodb
```
composer require jenssegers/mongodb
```
### add in config/app.php
```
Jenssegers\Mongodb\MongodbServiceProvider::class,
```
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
```
composer require tymon/jwt-auth
```
```
php artisan vendor:publish
```

pilih 'Tymon\JWTAuth\Providers\LaravelServiceProvider'

```
php artisan jwt:secret
```

## Auth
### Login Function
2 roles in login, admin & user
![ScreenShot](/Screenshots/login.png)

### Account Profile Function
![ScreenShot](/Screenshots/profile.png)

### Logout Function
![ScreenShot](/Screenshots/logout.png)


## Admin Only (admin login require)
### Create Function
![ScreenShot](/Screenshots/create.png)

### Update Function
![ScreenShot](/Screenshots/update.png)

### Delete Function
![ScreenShot](/Screenshots/delete.png)

### Sold Function
Get all item where status is 'Sold' (penjualan kendaraan)
![ScreenShot](/Screenshots/sold.png)

### Detail Function
Get item's detail (laporan penjualan per kendaraan)
![ScreenShot](/Screenshots/detail.png)

## Users
### Index (check stok availability)
List item's stock
![ScreenShot](/Screenshots/stok.png)

### Buy Function
Change item's status from 'Available' to 'Sold'
![ScreenShot](/Screenshots/buy.png)