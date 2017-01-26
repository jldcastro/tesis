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
Route::get('eliminar_usuario/{id}', 'UsuariosController@eliminar_usuario');

//Rutas mantenedores nombres
Route::get('nuevo_nombre', 'NombresController@nuevo_nombre');
Route::post('crear_nombre', 'NombresController@crear_nombre');
Route::get('lista_nombres/{page?}', 'NombresController@lista_nombres');
Route::get('editar_nombre/{id}', 'NombresController@editar_nombre');
Route::post('actualizar_nombre', 'NombresController@actualizar_nombre');
Route::get('eliminar_nombre/{id}', 'NombresController@eliminar_nombre');

//Rutas mantenedores marcas
Route::get('nueva_marca', 'MarcasController@nueva_marca');
Route::post('crear_marca', 'MarcasController@crear_marca');
Route::get('lista_marcas/{page?}', 'MarcasController@lista_marcas');
Route::get('editar_marca/{id}', 'MarcasController@editar_marca');
Route::post('actualizar_marca', 'MarcasController@actualizar_marca');
Route::get('eliminar_marca/{id}', 'MarcasController@eliminar_marca');

//Rutas mantenedores ubicaciones
Route::get('nueva_ubicacion', 'UbicacionesController@nueva_ubicacion');
Route::post('crear_ubicacion', 'UbicacionesController@crear_ubicacion');
Route::get('lista_ubicaciones/{page?}', 'UbicacionesController@lista_ubicaciones');
Route::get('editar_ubicacion/{id}', 'UbicacionesController@editar_ubicacion');
Route::post('actualizar_ubicacion', 'UbicacionesController@actualizar_ubicacion');
Route::get('eliminar_ubicacion/{id}', 'UbicacionesController@eliminar_ubicacion');

//Rutas equipos
Route::get('nuevo_equipo', 'EquiposController@nuevo_equipo');
Route::post('crear_equipo', 'EquiposController@crear_equipo');
Route::post('imagen_equipo', 'EquiposController@imagen_equipo');
Route::get('lista_equipos/{page?}', 'EquiposController@lista_equipos');
Route::get('editar_equipo/{id}', 'EquiposController@editar_equipo');
Route::post('actualizar_equipo', 'EquiposController@actualizar_equipo');
Route::get('mostrar_equipo/{id}', 'EquiposController@mostrar_equipo');
Route::get('eliminar_equipo/{id}', 'EquiposController@eliminar_equipo');
Route::get('descargar_word/{id}','EquiposController@descargar_word');


//Rutas cotización
Route::get('solicitud','CotizacionController@cotizacion');
