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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
   });
});

Auth::routes();

Route::get('/symlink', function () {
   $target =$_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
   $link = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
   symlink($target, $link);
   echo "Done";
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('juzgados', App\Http\Controllers\JuzgadoController::class);


Route::resource('circunscripcions', App\Http\Controllers\CircunscripcionController::class);


Route::resource('circunscripcionJuzgados', App\Http\Controllers\Circunscripcion_juzgadoController::class);


Route::resource('clientes', App\Http\Controllers\ClienteController::class);


Route::resource('expedientes', App\Http\Controllers\ExpedienteController::class);


Route::resource('gastoExpedientes', App\Http\Controllers\Gasto_expedienteController::class);



Route::post('/clientes/crear', [App\Http\Controllers\ClienteController::class, 'crear']);
Route::post('/juzgados/crear', [App\Http\Controllers\JuzgadoController::class, 'crear']);
Route::post('/circunscripcions/crear', [App\Http\Controllers\CircunscripcionController::class, 'crear']);

Route::resource('expedienteDetalles', App\Http\Controllers\Expediente_detalleController::class);


Route::resource('pagoExpedientes', App\Http\Controllers\Pago_expedienteController::class);
Route::get('pagoExpediente/archivo', [App\Http\Controllers\Pago_expedienteController::class, 'archivo'])->name('pagoExpedientes.archivo');
Route::get('gastoExpediente/archivo', [App\Http\Controllers\Gasto_expedienteController::class, 'archivo'])->name('gastoExpedientes.archivo');


Route::resource('users', App\Http\Controllers\UserController::class);



Route::get('audiencias', [App\Http\Controllers\AudienciasController::class, 'index'])->name('audiencias.index');
Route::post('audiencias', [App\Http\Controllers\AudienciasController::class, 'store'])->name('audiencias.store');
Route::patch('audiencias/update/{id}', [App\Http\Controllers\AudienciasController::class, 'update'])->name('audiencias.update');
Route::delete('audiencias/destroy/{id}', [App\Http\Controllers\AudienciasController::class, 'destroy'])->name('audiencias.destroy');

Route::get('/audiencias/mostrar', [App\Http\Controllers\AudienciasController::class, 'mostrar']);
Route::post('audiencia_crear', [App\Http\Controllers\AudienciasController::class, 'audiencia']);	

Route::resource('reporte', App\Http\Controllers\ReporteController::class);	

Route::resource('pdf', App\Http\Controllers\PdfController::class);

Route::get('graficos/index', [App\Http\Controllers\GraficoController::class, 'grafico'])->name('graficos');
Route::get('audiencias/consulta', [App\Http\Controllers\Consulta_audiencaController::class, 'consulta'])->name('consultas');