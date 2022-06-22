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
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
Route::get('/main', 'MainController@index')->name("main");
Route::get('/estadopagos', 'EstadoPagoController@index')->name("homePageEstadoPago");
Route::get('/getestadopagos', 'EstadoPagoController@getEstadoPagos')->name("getEstadoPagos");

Route::get('/excel','RegistroController@excel')->name("excel");
Route::get('/excel2','RegistroController@excel2')->name("excel2");
Route::get('/registro','RegistroController@index')->name("inicio");
Route::post('/guardarinforme','RegistroController@guardarInforme')->name("cerrar_sesion");
Route::post('/marcarmensaje','RegistroController@marcarMensaje')->name("marcarMensaje");
Route::post('/login/sesion', 'LoginController@inicioSesion')->name("sesion");

Route::get('/prueba','InicioController@prueba')->name("prueba");

Route::get('/anegocio/user/{user}','AnegocioController@getAnegocioByUserId')->name("prueba");
Route::get('/signin/user/{user}/pass/{pass}','LoginController@signIn')->name("signIn");

Route::get('/getanegociobyuser','AnegocioController@getAnegocioByUserId')->name("getanegociobyuserid");
Route::get('/currentdate', function () {

    $currentDate = getdate();
	return json_encode($currentDate);
 });
/* Route::match(['get', 'post'],'/signin','LoginController@signIn')->name("signIn");
*/
Route::get('/', function () {

    return "hola mundo";
 });
