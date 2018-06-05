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

Route::get('/patients', function (Request $request) {
    return ['status' => true];
});

Route::get('/patients{id}', function (Request $request) {
    return ['status' => true];
});

Route::post('/patients', function (Request $request) {
    return ['status' => true];
});

Route::patch('/patients/{id}', function (Request $request) {
    return ['status' => true];
});

// Appointments Routes
Route::get('/patients/{patient}/appointments', function (Request $request) {
    return ['status' => true];
});

Route::get('/patients/{patient}/appointments/{id}', function (Request $request) {
    return ['status' => true];
});

Route::post('/patients/{patient}/appointments', function (Request $request) {
    return ['status' => true];
});

Route::patch('/patients/{patient}/appointments/{id}', function (Request $request) {
    return ['status' => true];
});

Route::delete('/patients/{patient}/appointments/{id}', function (Request $request) {
    return ['status' => true];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
