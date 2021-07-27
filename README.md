
## Laravel API using Laravel / Passport

![Development](https://laravel.com/docs/8.x/passport)<span>Laravel Passport</span> provides a full OAuth2 server implementation for your Laravel application in a matter of minutes. Passport is built on top of the League OAuth2 server.

## Requirements
Laravel 8<br>
PHP 8.0.8<br>
Laravel / Passport> = 10.1<br>
Mysql 8.0.26<br>

## Installation

php artisan migrate:refresh --seed<br>
php artisan passport:client --personal

## Database


- http://localhost/api/register
- http://localhost/api/login
- Copy Token to use in postman
- http://localhost/api/owner (GET,POST,PUT,DELETE)
- http://localhost/api/pet   (GET,POST,PUT,DELETE)
