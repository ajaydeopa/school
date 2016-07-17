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


Route::group(['middlewareGroups' => ['web']], function(){
	Route::auth();

    Route::group(['middleware' => 'guest'], function(){
    	Route::get('/', function(){
	        return view('pages.index');
	    });
    });

    Route::group(['middleware' => 'auth'], function(){
    	Route::get('dashboard', function(){
	        return view('pages.dashboard');
	    });

    	//write all routes here
        Route::get('registration', function(){
            return view('pages.register');
        });

    });
});
/*Route::get('/', function () {
    return view('index');
});*/
/*Route::post('login', function () {
    return $_POST['email'].'   '.$_POST['password'];
});*/
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
Route::get('test', function () {
    return view('login');
});
Route::get('tabs', function () {
    return view('test');
});
