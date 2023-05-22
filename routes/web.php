<?php

use App\Http\Controllers\CuentoController;
use App\Http\Controllers\FabulaController;
use App\Http\Controllers\LeyendaController;
use App\Http\Controllers\ChisteController;
use Illuminate\Support\Facades\Route;

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

Route::resource('cuentos', CuentoController::class);
Route::resource('fabulas', FabulaController::class);
Route::resource('leyendas', LeyendaController::class);
Route::resource('chistes', ChisteController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
