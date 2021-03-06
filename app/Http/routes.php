<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('olvidaste_contrasena', function () {
    return view('olividaste_contrasema');
});

Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::get('init','LogController@init');



Route::get('dashboard', ['as' => 'admin', 'uses' => 'AdministradorController@admin']);



Route::resource('evento','EventoController');
Route::resource('relacionador','RelacionadorController');
Route::resource('invitado','InvitadosController');
Route::resource('invitado_eventos','Invitados_EventoController');
Route::resource('enviar_invitacion','EnviarInvitacionController');

Route::get('registro', ['as' => 'registro', 'uses' => 'InvitadosController@registro']);

Route::get('/facebook', 'InvitadosController@facebook');
Route::get('/callback', 'InvitadosController@callback');

Route::get('registrate', ['as' => 'registroget', 'uses' => 'InvitadosController@formularioRegistro']);
