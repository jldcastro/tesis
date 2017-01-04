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
Route::get('nuevo_usuario', 'FormulariosController@nuevo_usuario');
Route::post('crear_usuario', 'UsuariosController@crear_usuario');