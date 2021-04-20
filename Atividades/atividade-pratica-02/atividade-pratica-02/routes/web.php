<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;

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
    return view('inicio');
})->name('inicio');

Route::get('/Administrativo', function () {
    return view('administrativo.Administrativo');
})->name('Administrativo')->middleware('auth');

Route::get('/Suporte', function () {
    return view('suporte.index');
})->name('index');

// Route::get('/RelatorioEquipamentos', function () {
//     return view('suporte.equipamento.index');
// })->name('equipamento.index');

// Route::get('/RelatorioManutencao', function () {
//     return view('suporte.manutencao.index');
// })->name('manutencao.index');



Route::resource('/equipamentos', EquipamentoController::class)->middleware('auth');
Route::resource('/registros', RegistroController::class)->middleware('auth');
Route::resource('/usuarios', UserController::class)->middleware('auth');
Route::resource('/relatorioEquipamentos', EquipamentoController::class);
Route::resource('/relatorioManutencao', RegistroController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
