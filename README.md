## Laravel 8 Complete Blog

• Author: Dmytro

## Requirements

• PHP 7.3 or higher <br>
• Node 12.13.0 or higher <br>

## Usage <br>

Setting up your development environment on your local machine: <br>

```
git clone git@github.com:Dmytro-bit/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>

Create a database <br>

```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables

```
php artisan migrate
```

Setup google OAuth credentials in the .env file <br>

```
GOOGLE_CLIENT_ID={CLIENT_ID}
GOOGLE_CLIENT_SECRET={CLIENT_SECRET}
GOOGLE_REDIRECT_URL={REDIRECT}
```
