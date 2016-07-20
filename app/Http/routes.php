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

Route::get('refresh-csrf', function () {
    return csrf_token();
});

Route::get('/', [
    'uses' => function () {
        return view('welcome');
    },
    'middleware' => 'guest',
]);

Route::auth();

$router->get('/home', [
    'uses' => 'HomeController@index',
    'middleware' => 'auth',
]);

$router->get('/password/change', [
    'uses' => 'PasswordController@edit',
    'middleware' => 'auth',
]);
$router->post('/password/change', [
    'uses' => 'PasswordController@update',
    'middleware' => 'auth',
]);

$router->get('/profile', [
    'uses' => 'ProfileController@index',
    'middleware' => 'auth',
]);
$router->get('/profile/edit', [
    'uses' => 'ProfileController@edit',
    'middleware' => 'auth',
]);
$router->patch('/profile', [
    'uses' => 'ProfileController@update',
    'middleware' => 'auth',
]);
$router->patch('/profile/img', [
    'uses' => 'ProfileController@updateImg',
    'middleware' => 'auth',
]);

Route::group([
    'middleware' => ['auth', 'roles'],
    'roles' => 'admin',
], function ($router) {
    $router->resource('/user', 'UserController');
});

function _l() {
    l('routes', request());
}

register_shutdown_function('_l');