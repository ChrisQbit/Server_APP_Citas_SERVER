<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichs
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'App\Http\Controllers\APIBotonController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin_citas', [App\Http\Controllers\HomeController::class, 'admin_citas'])->name('admin_citas');
Route::post('/guardar_cita', [App\Http\Controllers\HomeController::class, 'guardar_cita'])->name('guardar_cita');
Route::get('/citas_canceladas', [App\Http\Controllers\HomeController::class, 'citas_canceladas'])->name('citas_canceladas');
Route::get('/citas_confirmadas', [App\Http\Controllers\HomeController::class, 'citas_confirmadas'])->name('citas_confirmadas');
Route::get('/citas_proximas', [App\Http\Controllers\HomeController::class, 'citas_proximas'])->name('citas_proximas');
Route::get('/citas_pasadas', [App\Http\Controllers\HomeController::class, 'citas_pasadas'])->name('citas_pasadas');
Route::post('/cancel_cita_web', [App\Http\Controllers\HomeController::class, 'cancel_cita_web'])->name('cancel_cita_web');

Route::get('/mis_afiliados', [App\Http\Controllers\HomeController::class, 'mis_afiliados'])->name('mis_afiliados');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
