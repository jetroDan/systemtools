<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('userslist', [
    'as' => 'userslist', 'uses' => 'UsersController@list'
]);
$router->post('usersCreate','UsersController@store');
$router->put('usersUpdate/{id}','UsersController@update');

$router->get('companieslist', [
    'as' => 'companieslist', 'uses' => 'CompaniesController@list'
]);
$router->post('companiesCreate','CompaniesController@store');
$router->put('companiesUpdate/{id}','CompaniesController@update');

$router->get('machineslist', [
    'as' => 'machineslist', 'uses' => 'MachinesController@list'
]);
$router->post('machinesCreate','MachinesController@store');
$router->put('machinesUpdate/{id}','MachinesController@update');
