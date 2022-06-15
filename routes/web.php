<?php

use App\Http\Livewire\Blog;
use App\Http\Livewire\BlogDetails;
use App\Http\Livewire\EventDetails;
use App\Http\Livewire\Events;
use App\Http\Livewire\RegisterPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
*/

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('aboutpage');

Route::get('/contact', function () {
    return view('contact');
})->name('contactpage');

Route::get('/next-steps', function () {
    return view('next-steps');
})->name('nextstepspage');

Route::get('/get-involved', function () {
    return view('get-involved');
})->name('getinvolvedpage');

Route::get('/register-page', function () {
    return view('register-page');
})->name('registerpage');

// Route::get('/register-page', RegisterPage::class)->name('registerpage');

Route::get('/blog', Blog::class)->name('blogpage');

Route::get('/blog/{slug}', BlogDetails::class)->name('blogdetailspage');

Route::get('/events', Events::class)->name('eventspage');

Route::get('/event/{slug}', EventDetails::class)->name('eventdetailspage');