<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('/', 'App\Http\Controllers\PagesController@main');
Route::get('/main','App\Http\Controllers\PagesController@main');
Route::post('/main','App\Http\Controllers\MailController@getEmail')->name('newsletter-sub');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::post('/contact', 'App\Http\Controllers\ContactController@send')->name('contact-form');
Route::get('/news', 'App\Http\Controllers\PagesController@newsCategories');
Route::get('/gallery', 'App\Http\Controllers\PagesController@gallery');

