<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});
Route::get('calander', function () {
    return view('calander');
});
Route::get('welcome', function () {
    return view('welcome');
});

Route::get('table', function () {
    return view('table');
});
Route::get('card', function () {
    return view('card');
});
Route::get('card1', function () {
    return view('carddemo');
});
Route::get('sidebar4', function () {
    return view('sidebar4');
});
Route::get('tabs', function () {
    return view('sidebar41');
});
