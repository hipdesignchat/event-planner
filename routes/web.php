<?php

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
use App\Event;

Route::get('/', 'PagesController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('all_categories');
Route::get('/category/view/{category}', 'CategoryController@show')->name('category_view');
Route::get('/category/new', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');

Route::get('/event', 'EventController@index');
Route::get('/event/view/{event}', 'EventController@show')->name('event_view');
Route::get('/event/new', 'EventController@create');
Route::post('/event', 'EventController@store');
Route::post('/event/search', 'EventController@search');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');

// Routes for pages
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/privacy', 'PagesController@privacy')->name('privacy');
Route::get('/terms', 'PagesController@terms')->name('terms');
