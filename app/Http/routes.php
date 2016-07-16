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
