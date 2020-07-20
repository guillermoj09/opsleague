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
//REGISTRO JUGADORES
Route::get('/registro', 'RegisterController@index')->name('registro');
Route::prefix('/admin')->name('admin.')->namespace('Admin\Auth')->group(function(){
        
    //Login Routes
    Route::get('/login','LoginController@showLoginForm')->name('login');
    //Route::get('/home','LoginController@home')->name('home')->middleware('auth:admins');

    Route::post('/login','LoginController@login')->name('login');
    Route::post('/logout','LoginController@logout')->name('logout');

    //Forgot Password Routes
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
});

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/home','HomeController@index')->name('home')->middleware('auth:admins');
    
});
// VER PERFIL JUGADORES
Route::get('jugadores/perfil/ver/{id}','Jugador\JugadorController@ver')->name('jugador.ver');
//GUARDADO DE JUGADORES
Route::post('/registro','RegisterController@save')->name('registro');
//VERIFICACION LOGIN
Route::post('/validacionLogin', 'ValidacionLoginController@iniciarSesion')->name('validacionLogin');
//Route::post('/ValidacionLoginAdmin', 'ValidacionLoginController@iniciarSesion')->name('validacionLogin');
Route::get('/noticiasimages/{filename}',array(
    'as' => 'imageNoticia',
    'uses' =>  'NoticiaController@getImage'
));
//CRUD NOTICIAS ADMIN
Route::get('admin/noticias/edit/{id}','NoticiaController@edit')->middleware('auth:admins');
Route::post('admin/noticias/edit','NoticiaController@Update');
Route::get('admin/noticias/delete/{id}','NoticiaController@Delete')->middleware('auth:admins');
Route::get('admin/noticias','NoticiaController@index')->name('noticia')->middleware('auth:admins');
Route::get('admin/noticias/crear','NoticiaController@create')->name('noticia.create')->middleware('auth:admins');
Route::post('admin/noticias/crear','NoticiaController@crearnuevo')->name('noticia.crear');

Route::get('torneo/ver/{id}','TorneoController@show');

use App\Torneo;

Route::get('prueba',function(){

    $torneos = Torneo::all();

    foreach($torneos as $t){
        echo $t->nombre;
        foreach($t->comments as $c){
            echo $c->comment;
            echo $c->jugador->nickname;
            
        }
    }
    die();
});