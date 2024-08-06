<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;


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
Route::resource('empleado',EmpleadosController::class);
Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleado.create');
Route::post('/empleados/store', [EmpleadosController::class, 'store'])->name('empleado.store');
Route::post('/empleados/show', [EmpleadosController::class, 'show'])->name('empleado.show');
Route::delete('/empleados/{id}', [EmpleadosController::class, 'destroy'])->name('empleado.destroy');
Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleado.index');