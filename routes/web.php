<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/reservas', 'ReservaController@index');
Route::get('/reservas/create', 'ReservaController@create');
Route::post('/reservas', 'ReservaController@store');
Route::get('/reservas/{id}', 'ReservaController@show');
Route::get('/reservas/{id}/edit', 'ReservaController@edit');
Route::put('/reservas/{id}', 'ReservaController@update');
Route::delete('/reservas/{id}', 'ReservaController@destroy');
