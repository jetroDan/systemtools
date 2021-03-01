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

//users
$router->get('userslist', [
    'as' => 'userslist', 'uses' => 'UsersController@list'
]);
$router->post('usersCreate','UsersController@store');
$router->put('usersUpdate/{id}','UsersController@update');
$router->delete('usersDelete/{id}','UsersController@usersDelete');
$router->get('searchUser/{id}','UsersController@searchUser');


//companies
$router->get('companieslist', [
    'as' => 'companieslist', 'uses' => 'CompaniesController@list'
]);
$router->post('companiesCreate','CompaniesController@store');
$router->put('companiesUpdate/{id}','CompaniesController@update');
$router->delete('companiesDelete/{id}','CompaniesController@companiesDelete');
$router->get('searchCompanie/{id}','CompaniesController@searchCompanie');


//machines
$router->get('api/machineslist', [
    'as' => 'api/machineslist', 'uses' => 'MachinesController@list'
]);
$router->post('machinesCreate','MachinesController@store');
$router->put('machinesUpdate/{id}','MachinesController@update');
$router->delete('macinesDelete/{id}','MachinesController@machinesDelete');
$router->get('searchMachine/{id}','MachinesController@searchMachine');

//spareparts
$router->get('sparepartslist', [
    'as' => 'sparepartslist', 'uses' => 'SparePartsController@list'
]);
$router->post('sparepartsCreate','SparePartsController@store');
$router->put('sparepartsUpdate/{id}','SparePartsController@update');
$router->delete('sparepartsDelete/{id}','SparePartsController@sparepartsDelete');
$router->get('searchSpareParts/{id}','SparePartsController@searchSpareParts');


