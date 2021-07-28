
## Laravel API using Laravel / Passport

<a href="https://laravel.com/docs/8.x/passport">Laravel Passport</a> provides a full OAuth2 server implementation for your Laravel application in a matter of minutes. Passport is built on top of the League OAuth2 server.

## Installation

Please see the appropriate guide for your enviroment of choice:

Laravel 8<br>
PHP 8.0.8<br>
Laravel / Passport> = 10.1<br>
Mysql 8.0.26<br>

You can use the Docker container that Laravel provides <a href="https://laravel.com/docs/8.x/installation">here</a>.

```php
## Running Migration
php artisan migrate
```

```php
# Running Seeders
php artisan db:seed
```

```php
## Creating ID and client.
php artisan passport:client --personal
```

## Database


                    



## Endpoints

- http://localhost/api/register
- http://localhost/api/login
- Copy Token to use in postman
- http://localhost/api/owner (GET,POST,PUT,DELETE)
- http://localhost/api/pet   (GET,POST,PUT,DELETE)
