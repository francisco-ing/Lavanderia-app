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
    return view('auth/login');
});

Route::get('/ingreso', function () {
    return view('ingreso');
});

Route::get('/egreso', function () {
    return view('egreso');
});

Route::resource('/transaccion', App\Http\Controllers\TransaccionController::class);

Route::get('/generar-pdf', function () {
    $pdf = PDF::loadView('tabla');
    return $pdf->download('tabla.pdf');
});

Route::get('/modificar', function () {
    return view('modificar');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\ServicioClinicoController::class, 'show'])->name('home');

Route::prefix('ingreso')->group(function () {
    Route::post('/store' , [App\Http\Controllers\IngresoController::class, 'store'])->name('ingreso.store');
});

Route::prefix('egreso')->group(function () {
    Route::post('/store' , [App\Http\Controllers\EgresoController::class, 'store'])->name('egreso.store');
});


