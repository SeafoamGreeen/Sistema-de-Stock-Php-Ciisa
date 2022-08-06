<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MenuController@index') ;

Route::get('/sesion', 'SesionController@index');
Route::get('/menu', 'MenuController@index');
Route::get('/registrar', 'RegistrarController@index');
Route::get('/asignar', 'AsignarController@index');
Route::get('/consultar', 'ConsultarController@index');
Route::get('/eliminar', 'EliminarController@index');
Route::get('/actualizar', 'ActualizarController@index');
Route::resource('/registrar', 'ProductosController::class');