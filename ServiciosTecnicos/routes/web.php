<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\InfoServicioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Controllers\TipoTrackingController;

use App\Http\Controllers\TrackingController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('personas',PersonaController::class);
Route::resource('clientes',ClienteController::class);
Route::resource('empleados',EmpleadoController::class);
Route::resource('equipos',EquipoController::class);
Route::resource('infoservicios',InfoServicioController::class);
Route::resource('servicios',ServicioController::class);
Route::resource('tipo-empleados',TipoEmpleadoController::class);
Route::resource('tipo-equipos',TipoEquipoController::class);
Route::resource('tipos-tracking',TipoTrackingController::class);
Route::resource('trackings',TrackingController::class);