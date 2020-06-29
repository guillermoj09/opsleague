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

Route::get('/', function () {
    return view('home');
});

Route::get('/registro', 'RegisterController@index')->name('registro');

Route::post('/registro','RegisterController@save')->name('registro');

Route::post('/validacionLogin', 'ValidacionLoginController@iniciarSesion')->name('validacionLogin');

