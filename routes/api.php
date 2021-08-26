<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\PacientesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', [App\Http\Controllers\PacientesController::class, 'loginAPI']);

Route::middleware('auth:api')->group( function() {
    Route::get('/consultorios', [App\Http\Controllers\ConsultorioController::class, 'listaAPI']);
});