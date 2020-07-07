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

Route::get('/', 'HomeController@index')->name('/');

Route::get('/registro', 'RegisterController@index')->name('registro');

    
Route::prefix('/admin')->name('admin.')->namespace('Admin\Auth')->group(function(){
        
    //Login Routes
    Route::get('/login','LoginController@showLoginForm')->name('login');
    Route::get('/home','LoginController@home')->name('home')->middleware('auth:admins');

    Route::post('/login','LoginController@login')->name('login');
    Route::post('/logout','LoginController@logout')->name('logout');

    //Forgot Password Routes
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
});



Route::post('/registro','RegisterController@save')->name('registro');

Route::post('/validacionLogin', 'ValidacionLoginController@iniciarSesion')->name('validacionLogin');


//Route::post('/ValidacionLoginAdmin', 'ValidacionLoginController@iniciarSesion')->name('validacionLogin');

Route::get('/noticiasimages/{filename}',array(
    'as' => 'imageNoticia',
    'uses' =>  'NoticiaController@getImage'
));

