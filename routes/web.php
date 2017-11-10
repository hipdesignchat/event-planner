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

Route::get('/', function () {
    $title = 'Event Planner';
    $events = Event::take(6)->orderBy('event_begin', 'desc')->get();
    return view('pages.landing', compact(['title', 'events']));
})->name('home');

Route::get('/event', 'EventController@index');
Route::get('/event/view/{event}', 'EventController@show')->name('event_view');
Route::get('/event/new', 'EventController@create');
Route::post('/event', 'EventController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');
