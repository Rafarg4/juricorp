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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('juzgados', App\Http\Controllers\JuzgadoController::class);


Route::resource('circunscripcions', App\Http\Controllers\CircunscripcionController::class);


Route::resource('circunscripcionJuzgados', App\Http\Controllers\Circunscripcion_juzgadoController::class);


Route::resource('clientes', App\Http\Controllers\ClienteController::class);


Route::resource('expedientes', App\Http\Controllers\ExpedienteController::class);


Route::resource('gastoExpedientes', App\Http\Controllers\Gasto_expedienteController::class);
