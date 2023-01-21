<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/route', 'RouteController@index');
Route::get('/route/create', 'RouteController@create');
Route::post('/route', 'RouteController@store');
Route::get('/route/{id}/edit', 'RouteController@edit');
Route::post('/route/{id}/edit', 'RouteController@update');
Route::get('/route/{id}/delete', 'RouteController@destroy');

Route::get('/client', 'ClientController@index');
Route::get('/client/create', 'ClientController@create');
Route::post('/client', 'ClientController@store');
Route::get('/client/{id}/edit', 'ClientController@edit');
Route::post('/client/{id}/edit', 'ClientController@update');
Route::get('/client/{id}/delete', 'ClientController@destroy');