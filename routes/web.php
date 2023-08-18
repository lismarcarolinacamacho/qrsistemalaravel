<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
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
//rutas consulta api
Route::get('/', [FormularioController::class, 'mostrarFormulario'])->name('formulario');
Route::post('/procesar-formulario', [FormularioController::class, 'procesarFormulario'])->name('procesar-formulario');