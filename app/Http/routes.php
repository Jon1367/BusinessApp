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
    //return View::make('index'); 
});

Route::post('search', 'ApiController@getData');


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('hello/{lat}/{lon}', 'ApiController@show');

Route::get('processName/{name}', 'ApiController@getDetails');

Route::get('getUser', 'ApiController@getUser');

Route::get('updateUserBM/{content}/{table}', 'ApiController@updateUserKey');


/*
|--------------------------------------------------------------------------
| login Routes
|--------------------------------------------------------------------------
*/

Route::post('logIn', 'userAuthController@auth');

