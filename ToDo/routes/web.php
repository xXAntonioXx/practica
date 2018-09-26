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


//==========================================================================
//aqui se carga el Login para despues mandar a validacion y mostrar la vista principal
Route::get('/', 'PrincipalController@Login');
Route::post('/main', 'PrincipalController@Cargar')->middleware('TrimStrings');

//==========================================================================
//aqui las API's para el crud de la aplicacion
Route::post('/create', 'PrincipalController@Crear');
Route::get('/delete/{id}','PrincipalController@Borrar');
Route::get('/api/pendientes','PrincipalController@respuesta');