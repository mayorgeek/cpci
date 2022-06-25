# Church Management System for Christ Preachers Church International

Developed by Aiotouch Softwares

## Installation

<br>

Run
```
git clone https://github.com/mayorgeek/cpci.git <br>
```

Run <br>
```
cd cpci
```
<br>


Run <br>
```
composer install
```
<br>

Run <br>
```
npm update
```
<br><br>

## How to start the application

<br>

 Create a database with the name ``` cpci ```

<br>



Next, migrate to database

```
php artisan migrate
```

<br>

Next, run the database seeder file <br>

```
php artisan migrate --seed
```

<br>

Next, create storage link
```
php artisan storage:link
```

<br>

Next, start the laravel development server

```
php artisan serve
```

<br>


## Login Details

<br>
Next, go to the login page and login with the following details: <br><br>

- email: admin@cpci.com <br>
- password: admin
  
<br>

You can register other users with different roles to test the multi-tenancy feature.

<br>

## Upgrade Guide

<br>

Run <br>
```
composer update
```
<br>

Run <br>

```
npm update
```

<br><br>

## Note 

<br>

The ``` Filament Login ``` file in <br> 
```
Filament\Http\Livewire\Auth 
```
<br>and<br><br>

``` web.php ``` file in <br> 
```
vendor\filament\filament\routes
```

<br>
Can get ovewritten during upgrade of filament package therby removing the logic to save user logs to database.