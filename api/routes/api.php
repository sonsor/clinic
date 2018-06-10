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

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');


Route::group(['middleware' => 'auth:api'], function(){

    Route::post('details', 'UserController@details');

    Route::get('/patients', 'PatientsController@index');

    Route::get('/patients/{id}', 'PatientsController@get');

    Route::post('/patients', 'PatientsController@create');

    Route::patch('/patients/{id}', 'PatientsController@update');

    // Appointments Routes
    Route::get('/patients/{patient}/appointments', 'AppointmentController@list');

    Route::get('/patients/{patient}/appointments/{id}', 'AppointmentController@get');

    Route::post('/patients/{patient}/appointments', 'AppointmentController@create');

    Route::patch('/patients/{patient}/appointments/{id}', 'AppointmentController@update');

    Route::delete('/patients/{patient}/appointments/{id}', 'AppointmentController@remove');

});

