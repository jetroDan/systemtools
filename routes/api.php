<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('postdist','Distribuidor@store');
// Route::put('putdist/{dist}','Distribuidor@update');
Route::get('getUsers','UsersController@list');

// Route::post('postusers','Itpusers@store');
// Route::put('putusers/{user}','Itpusers@update');
// Route::get('getusers','Itpusers@list');