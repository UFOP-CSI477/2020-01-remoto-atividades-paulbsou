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



use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;

Route::name('cliente.')->prefix('inicio')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('inicio');
    Route::get('/fmcliente', [ClienteController::class, 'show'])->name('show')->middleware('auth');
    Route::post('/cadastrar', [ClienteController::class, 'store'])->name('store');
});


Route::name('portfolio.')->prefix('portfolio')->group(function () {
    Route::get('/', [ClienteController::class, 'portfolio'])->name('inicio');
    Route::get('/retratos', [ClienteController::class, 'retratos'])->name('retratos');
    Route::get('/familias', [ClienteController::class, 'familias'])->name('familias');
    Route::get('/casais', [ClienteController::class, 'casais'])->name('casais');
});


Route::name('produtos.')->prefix('produto')->group(function () {
    Route::get('/loja', [ProdutoController::class, 'loja'])->name('inicio');
    Route::get('/finalizar', [ProdutoController::class, 'ensaios'])->name('ensaios');
    Route::get('/', [ProdutoController::class, 'index'])->name('index');
    Route::get('/cadastrar', [ProdutoController::class, 'create'])->name('create');
    Route::post('/armazenar', [ProdutoController::class, 'store'])->name('store');
     Route::get('/exibir', [ProdutoController::class, 'show'])->name('show');
     Route::get('/editar/{produto}', [ProdutoController::class, 'edit'])->name('edit');
     Route::delete('/excluir/{produto}', [ProdutoController::class, 'destroy'])->name('destroy');
     Route::put('/atualizar', [ProdutoController::class, 'update'])->name('update');
});

Route::name('pedidos.')->prefix('pedidos')->group(function () {
    Route::get('/', [PedidoController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/cadastrar', [PedidoController::class, 'create'])->name('create');
    Route::post('/armazenar', [PedidoController::class, 'store'])->name('store');
    Route::get('/fmpedidos', [PedidoController::class, 'show'])->name('show')->middleware('auth');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
