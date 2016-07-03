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

Route::auth();

$router->get('/home', [
    'uses' => 'HomeController@index',
    'middleware' => 'auth',
]);

Route::group([
    'middleware' => 'auth',
], function ($router) {
    $router->resource('/profile', 'ProfileController');
});

Route::group([
    'middleware' => ['auth', 'roles'],
    'roles' => 'admin',
], function ($router) {
    $router->resource('/user', 'UserController');
});
