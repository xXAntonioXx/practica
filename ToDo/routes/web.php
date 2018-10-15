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

Route::post('/autenticado', 'UsuarioController@validar');//ruta para hacer la validacion y crear la sesion en el navegador

Route::get('/main','PrincipalController@Cargar')->middleware(CheckSess::class);//vista principal con middleware que solo permite acceso si la sesion en el navegador esta creada

Route::get('/salir','UsuarioController@CerrarSess'); //cierra la sesion y redirecciona al login

Route::get('/upload',function(){
    return view('upload');
});
//==========================================================================
//aqui las API's para el crud de la aplicacion
Route::group(['middleware'=>'CheckSess'],function(){
    Route::post('/create', 'PrincipalController@Crear');
    Route::get('/delete/{id}','PrincipalController@Borrar');
    Route::get('/api/pendientes','PrincipalController@respuesta');
});