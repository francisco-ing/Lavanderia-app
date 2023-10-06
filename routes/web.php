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

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/ingreso', function () {
    return view('ingreso');
});

Route::get('/egreso', function () {
    return view('egreso');
});

Route::get('/transaccion', function () {
    return view('transaccion');
});

Route::get('/modificar', function () {
    return view('modificar');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('ingreso')->group(function () {
    Route::post('/store' , [App\Http\Controllers\IngresoController::class, 'store'])->name('ingreso.store');
});

Route::prefix('egreso')->group(function () {
    Route::post('/store' , [App\Http\Controllers\EgresoController::class, 'store'])->name('egreso.store');
});
