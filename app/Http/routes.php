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
    return "a";
});

Route::resource('post', 'PostsController');
get('getall', 'PostsController@getAll');

get('event', function () {
    event(new \App\Events\UserRegistered());

    return 'Success';
});
