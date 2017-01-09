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


// Rutas para el login
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Rutas para registrar
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Rutas usuarios
Route::get('nuevo_usuario', 'UsuariosController@nuevo_usuario');
Route::post('crear_usuario', 'UsuariosController@crear_usuario');
Route::get('lista_usuarios/{page?}', 'UsuariosController@lista_usuarios');
Route::get('editar_usuario/{id}', 'UsuariosController@editar_usuario');
Route::post('actualizar_usuario', 'UsuariosController@actualizar_usuario');
Route::get('mostrar_usuario/{id}', 'UsuariosController@mostrar_usuario');
Route::post('imagen_usuario', 'UsuariosController@imagen_usuario');
Route::post('cambiar_contrasena', 'UsuariosController@cambiar_contrasena');
Route::post('eliminar_usuario', 'UsuariosController@eliminar_usuario');

//Rutas equipos
Route::get('nuevo_equipo', 'EquiposController@nuevo_equipo');
Route::post('crear_equipo', 'EquiposController@crear_equipo');
Route::get('lista_equipos/{page?}', 'EquiposController@lista_equipos');

//Rutas cotización
Route::get('solicitud','CotizacionController@cotizacion');
