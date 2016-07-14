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
    return view('welcome');
});
Route::get('test', function () {
    return view('test');
});
Route::get('test1', function () {
    return view('test1');
});
Route::get('test2', function () {
    return view('test2');
});

Route::get('sidebar1', function () {
    return view('sidebar1');
});
Route::get('sidebar2', function () {
    return view('sidebar2');
});
Route::get('sidebar3', function () {
    return view('sidebar3');
});
Route::get('sidebar4', function () {
    return view('sidebar4');
});
Route::get('tabs', function () {
    return view('tabs');
});
