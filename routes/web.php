<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ConsultorioController;

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

Route::resource('admin/home', AdministradorController::class);
Route::resource('admin/pacientes', PacientesController::class);
Route::resource('admin/citas', CitaController::class);
Route::resource('admin/consultorios', ConsultorioController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdministradorController::class, 'index'])->name('home');
