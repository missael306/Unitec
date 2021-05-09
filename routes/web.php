<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//----- Default
Route::get('/', [LoginController::class, 'Index'])->name('default');

//----- Login
Route::prefix('login')->group(function () {

    Route::get('/crear-cuenta', [LoginController::class, 'CrearCuenta']);

    Route::get('/obtener-facultades', [LoginController::class, 'ObtenerFacultades']);

    Route::post('/autenticar', [LoginController::class, 'Autenticar'])->name('autenticar');
    
    Route::post('/logout', [LoginController::class, 'CerrarSesion'])->name('logout');
});


//----- Home
Route::prefix('home')->group(function () {

    Route::get('/index', [HomeController::class, 'Index'])->name('home');

});


