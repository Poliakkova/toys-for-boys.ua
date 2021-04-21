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
Route::get('/about', 'App\Http\Controllers\SomeController@showabout');
Route::get('/', 'App\Http\Controllers\SomeController@showindex');
Route::get('/catalogue', 'App\Http\Controllers\SomeController@showcatalogue');
Route::get('/ataka-dracona', 'App\Http\Controllers\SomeController@showataka');


Route::post('/catalogue', 'App\Http\Controllers\SomeController@search');
