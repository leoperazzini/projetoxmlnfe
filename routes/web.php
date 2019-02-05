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

Route::get('/', 'NfeController@envioxml');

Route::get('/nfe/envioxml/', 'NfeController@envioxml');

Route::post('/nfe/envioxml/', 'NfeController@envioxml');