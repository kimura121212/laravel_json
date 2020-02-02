<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'JsonController@index');

Route::get('/editview/{id}', 'JsonController@editview');

Route::get('/createview', 'JsonController@createview');

Route::post('/create', 'JsonController@create');

Route::post('/edit/{id}', 'JsonController@edit');