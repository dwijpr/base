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

Route::group(['middleware' => 'auth'], function ($router) {
    $router->get('/home', 'HomeController@index');
    $router->resource('/user', 'UserController');
    $router->resource('/role', 'RoleController');
    $router->resource('/permission', 'PermissionController');
});
