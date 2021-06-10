<?php

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

// Homepage
Route::get('/', 'PageController@index')->name('home');

// Contacts
Route::get('/contacts', 'PageController@contacts')->name('contacts');

// Houses
Route::get('/travel', 'TravelController@index')->name('travel');
