<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculoController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/calcularPrecio/{area}/{numpiso?}', [CalculoController::class, 'calculo']);

Route::get('/duenios/mostrar', [CalculoController::class, 'mostrarduenios'])->name('duenio.home');

Route::get('/propiedades/mostrar', [CalculoController::class, 'mostrarpropiedades'])->name('propiedad.home');

Route::get('/duenios/insertar', [CalculoController::class, 'agregarduenio'])->name('duenio.agregar');

Route::post('/propiedades/guardar', [CalculoController::class, 'store'])->name('duenio.store');
