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
use App\Http\Middleware\CheckSess;

//==========================================================================
//aqui se carga el Login para despues mandar a validacion y mostrar la vista principal
Route::get('/', 'PrincipalController@Login');

Route::post('/autenticado', 'UsuarioController@validar');

Route::get('/main','PrincipalController@Cargar')->middleware(CheckSess::class);

Route::get('/salir',function(){
    session_start();
    session_destroy();
    return redirect('/');
});

//==========================================================================
//aqui las API's para el crud de la aplicacion
Route::group(['middleware'=>'CheckSess'],function(){
    Route::post('/create', 'PrincipalController@Crear');
    Route::get('/delete/{id}','PrincipalController@Borrar');
    Route::get('/api/pendientes','PrincipalController@respuesta');
});