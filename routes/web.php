<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\PagAdminController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ReportesAdmin;
use App\Http\Controllers\RemisionController;

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
Route::resource('/sucursal', SucursalController::class);
Route::resource('/pagadmin', PagAdminController::class);
Route::resource('/encargado', EncargadoController::class);
Route::resource('/personal', PersonalController::class);
Route::resource('/unidad', UnidadController::class);
Route::resource('/inventario', InventarioController::class);
Route::resource('/reportesAdmin', ReportesAdmin::class);
Route::resource('/remisionmaterial', RemisionController::class);
Route::get('/remisionmaterial/Remision/{req}', [RemisionController::class, 'Remision'])->name('remisionmaterial.Remision');
Route::get('pdfremision/{remision}', [RemisionController::class, 'pdfremision'])->name('pdfremision');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
