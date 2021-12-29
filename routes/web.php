<?php

use App\Http\Controllers\InformeEconomicoController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\PDFInformeController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/egresos', function () {
    return view('egresos');
})->name('egresos');

Route::middleware(['auth:sanctum', 'verified'])->get('/informe/economico', function () {
    return view('reporte-ingreso');
})->name('reporte.ingreso');

Route::middleware(['auth:sanctum', 'verified'])->get('/tipo-ingresos', function () {
    return view('tipo-ingreso');
})->name('tipo.ingreso');

Route::middleware(['auth:sanctum', 'verified'])->get('/tipo-egresos', function () {
    return view('tipo-egreso');
})->name('tipo.egreso');


Route::get('/ingresos/export-excel', [IngresoController::class, 'exportExcel'])->name('ingresos.export');
//  informe economico Excel
Route::post('/informe/export-excel', [InformeEconomicoController::class, 'exportExcel'])->name('informe.export');
Route::post('/informe/export-pdf', [PDFInformeController::class, 'exportPDF'])->name('informe.pdf');