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
Route::get('/', 'HomeController@index')->name('index');
//REGISTRO JUGADORES
Route::get('/registro', 'RegisterController@index')->name('registro');
Route::prefix('/admin')->name('admin.')->namespace('Admin\Auth')->group(function(){
        
    //Login Routes
    Route::get('/login','LoginController@showLoginForm')->name('login');
    //Route::get('/home','LoginController@home')->name('home')->middleware('auth:admins');

    Route::post('/login','LoginController@login')->name('login');
    Route::post('/logout','LoginController@logout')->name('logout');

});

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/home','HomeController@index')->name('home')->middleware('auth:admins');
    
});
// VER PERFIL JUGADORES
Route::get('jugadores/perfil/ver/{id}','Jugador\JugadorController@ver')->name('jugador.ver');
Route::get('jugadores/perfil/editar/{id}','Jugador\JugadorController@editarJugador')->middleware('auth:web');
Route::post('jugadores/perfil/actualizar','Jugador\JugadorController@Update');


//GUARDADO DE JUGADORES
Route::post('/registro','RegisterController@save')->name('registro');
//VERIFICACION LOGIN
Route::post('/validacionLogin', 'ValidacionLoginController@iniciarSesion')->name('validacionLogin');
//Route::post('/ValidacionLoginAdmin', 'ValidacionLoginController@iniciarSesion')->name('validacionLogin');

//OBTENER IMAGEN NOTICIAS
Route::get('/noticiasimages/{filename}',array(
    'as' => 'imageNoticia',
    'uses' =>  'NoticiaController@getImage'
));
//OBTENER IMAGEN HIGHLIGHT
Route::get('/highlightimages/{filename}',array(
    'as' => 'imageHighlight',
    'uses' =>  'HighlightController@getImage'
));
//OBTENER IMAGEN JUGADOR
Route::get('/jugadorimages/{filename}',array(
    'as' => 'imageJugador',
    'uses' =>  'Jugador\JugadorController@getImage'
));
//OBTENER BANNER TORNEO
Route::get('/torneoimages/{filename}',array(
    'as' => 'imagetorneo',
    'uses' =>  'TorneoController@getImage'
));
//CARRUSEL
Route::get('/carrusel/{filename}',array(
    'as' => 'carrusel',
    'uses' =>  'NoticiaController@getImageCarrusel'
));


Route::post('jugador/logout','Jugador\JugadorController@logout');
//CRUD ADMIN

Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('password.update');


Route::group(['middleware' => ['auth:admins']], function () {
    Route::get('admin/home','HomeController@AdminHome');
    Route::get('admin/noticias/edit/{id}','NoticiaController@edit');
    Route::post('admin/noticias/edit','NoticiaController@Update');
    Route::get('admin/noticias/delete/{id}','NoticiaController@Delete');
    Route::get('admin/noticias','NoticiaController@index');
    Route::get('admin/noticias/crear','NoticiaController@create')->name('noticia.create');
    Route::post('admin/noticias/crear','NoticiaController@crearnuevo')->name('noticia.crear');
    Route::get('admin/torneos','TorneoController@index');
    Route::get('admin/torneos/crear','TorneoController@create');
    Route::post('admin/torneos/crear','TorneoController@store');
    Route::get('admin/torneos/edit/{id}','TorneoController@edit');
    Route::post('admin/torneos/edit','TorneoController@Update');
    Route::get('admin/torneos/delete/{id}','TorneoController@Delete');
    Route::get('admin/highlight','HighlightController@index');
    Route::get('admin/highlight/crear','HighlightController@create');
    Route::post('admin/highlight/crear','HighlightController@store');
    Route::get('admin/highlight/delete/{id}','HighlightController@Delete');
    Route::get('admin/highlight/edit/{id}','HighlightController@Edit');
    Route::post('admin/highlight/edit/','HighlightController@Update');
});

Route::get('/contacto','ContactoController@index');

Route::get('torneo/ver/{id}','TorneoController@show');

Route::post('/crearComentario','CommentTorneoController@store')->name('crearComentario');

Route::post('/crearRespuesta','CommentComentController@store')->name('crearRespuesta');

Route::post('/file-upload','NoticiaController@DropZone');

Route::get('jugadores/cambiarPassword/{id}','Jugador\PasswordController@showCambiarPassword');

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

//RUTAS NOTICIAS 
Route::get('noticia/ver/{id}','NoticiaController@VerNoticia');

Route::get('/pruebaajax','HomeController@PruebaAjax');