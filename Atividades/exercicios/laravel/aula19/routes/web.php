<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/relatorios', function () {
    return view('relatorios');
})->name('relatorios');

Route::resource('/produtos', ProdutoController::class)-> middleware('auth');
Route::resource('/estados', EstadoController::class)-> middleware('auth');
Route::resource('/cidades', CidadeController::class)-> middleware('auth');
Route::resource('/compras', CompraController::class)-> middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
