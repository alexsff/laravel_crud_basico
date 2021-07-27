<?php

use App\Http\Controllers\ProdutosController;
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
    return view('welcome');
});

//Route::get('/produtos/novo','App\Http\Controllers\ProdutosController@create');
Route::get('/produto/novo',[ProdutosController::class, 'create']);
Route::post('/produto/novo',[ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produto/ver/{id}',[ProdutosController::class, 'show']);
Route::get('/produto/editar/{id}',[ProdutosController::class, 'edit']);
Route::put('/produto/editar/{id}',[ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produto/excluir/{id}',[ProdutosController::class, 'delete']);
Route::post('/produto/excluir/{id}',[ProdutosController::class, 'destroy'])->name('excluir_produto');
//Route::resource('produtos',ProdutosController::class); //Crias rotas automaticas para ver as rotas executar o comando php artisan route:list
