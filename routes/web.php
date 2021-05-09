<?php

use App\Http\Controllers\LoginController;
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
//----- Default
Route::get('/', [LoginController::class, 'Index']);

//----- Login
Route::prefix('login')->group(function () {

    Route::get('/crear-cuenta', [LoginController::class, 'CrearCuenta']);

    Route::get('/obtener-facultades', [LoginController::class, 'ObtenerFacultades']);
});


