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

//Route::get('/catalogue', 'App\Http\Controllers\SomeController@showcatalogue');

Route::get('/catalogue', function () {
    $assort = DB::table('assort')->get();
    return view('catalogue', compact('assort'));
});

Route::post('/catalogue', 'App\Http\Controllers\SomeController@search');

Route::get('/toypage', function () {
    $assort = DB::table('assort')->get();
    return view('toypage', compact('assort'));
});


//Route::get('/about', function () {
//    return view('about');
//});

//Route::get('/toypage/{page}', function ($page) {
//    $toy = DB::table('assort')->find($page);
//    dd($toy);
//    return view('toypage', compact('assort'));
//});

//Route::get('/pages/'{$page}'.php', SomeController@get() {
//    return view('about');
//});


