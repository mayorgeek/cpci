# Church Management for Christ Preachers Church International

Developed by Aiotouch Softwares

## Installation

git clone 

Run
```cd cpci```

Run
```composer install```

Run
```npm update```

## How to start the application

Create a database with the name **cpci**

Next, run the database seeder file

```
    php artisan migrate --seed
```

Next, migrate to database

```
    php artisan migrate
```

Next, start the laravel development server

```
    php artisan serve
```

Next, go to the login page and login with the following details:

email: admin@cpci.com
password: admin

You can register other users with different roles to test the multi-tenancy feature.

## Upgrade Guide

composer update

npm update

**Note**
The 