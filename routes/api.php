<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('boton_find_ticket', 'App\Http\Controllers\APIBotonController@boton_find_ticket');
Route::post('login_app', 'App\Http\Controllers\APIBotonController@login_app');
Route::post('getAdress', 'App\Http\Controllers\APIBotonController@getAdress_app');
Route::post('get_citas', 'App\Http\Controllers\APIBotonController@get_citas');

Route::post('get_historial', 'App\Http\Controllers\APIBotonController@get_historial');
Route::post('get_empresas', 'App\Http\Controllers\APIBotonController@get_empresas');
Route::post('update_perfil', 'App\Http\Controllers\APIBotonController@update_perfil');
Route::post('update_address', 'App\Http\Controllers\APIBotonController@update_address');
Route::post('cancel_cita', 'App\Http\Controllers\APIBotonController@cancel_cita');
Route::post('get_citas_v2', 'App\Http\Controllers\APIBotonController@get_citas_v2');
Route::post('agendar', 'App\Http\Controllers\APIBotonController@agendar');
Route::post('registro_app', 'App\Http\Controllers\APIBotonController@registro_app');
