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

Route::post('search', 'ApiController@getData');



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('hello/{lat}/{lon}', 'ApiController@show');

Route::get('processName/{name}', 'ApiController@getDetails');

Route::get('getUser', 'ApiController@getUser');

Route::get('getContent', 'ApiController@getContent');

Route::get('updateUserBM/{content}/{table}', 'ApiController@updateUserKey');

Route::get('updateNote/{content}/{table}/{type}', 'ApiController@updateNote');

Route::get('addTitle/{title}', 'ApiController@addTitle');

Route::get('getTitle', 'ApiController@getTitle');

Route::get('deleteNote/{table}/{type}', 'ApiController@deleteNote');

Route::get('moreInfo/{email}', 'ApiController@moreInfo');

Route::get('sendMessage/{toEmail}/{message}', 'ApiController@sendMessage');

Route::get('getMessages/', 'ApiController@getMessages');

Route::get('getUserMessages/{fromEmail}', 'ApiController@getUserMessages');


Route::get('searchTitle/{input}', 'ApiController@searchTitle');









/*
|--------------------------------------------------------------------------
| login Routes
|--------------------------------------------------------------------------
*/

Route::post('logIn', 'userAuthController@auth');

Route::post('siginUp', 'userAuthController@createUser');

Route::get('logOut', 'userAuthController@logOut');

