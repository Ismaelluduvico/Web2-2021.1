<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensVendaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ItensEntradaController;
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
//Rotas clientes
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.delete');
//Route::get('/clientes/showendereco', [ClienteController::class, 'showendereco'])->name('showendereco');

//Rotas fornecedor
Route::get('/fornecedores/indexfornecedor',[FornecedorController::class, 'indexfornecedor'])->name('fornecedores.index');
Route::get('/fornecedores/createfornecedor',[FornecedorController::class, 'createfornecedor'])->name('fornecedores.create');
Route::post('/fornecedores/storefornecedor',[FornecedorController::class, 'storefornecedor'])->name('fornecedores.store');
Route::get('/fornecedores/showfornecedor/{id}', [FornecedorController::class, 'showfornecedor'])->name('fornecedores.show');
Route::get('/fornecedores/editfornecedor/{id}', [FornecedorController::class, 'editfornecedor'])->name('fornecedores.edit');
Route::put('/fornecedores/updatefornecedor/{id}', [FornecedorController::class, 'updatefornecedor'])->name('fornecedores.update');
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroyfornecedor'])->name('fornecedores.delete');

//Rotas Endereço
Route::get('/enderecos/indexendereco', [EnderecoController::class, 'indexendereco'])->name('enderecos.index');
Route::get('/enderecos/createendereco', [EnderecoController::class, 'createendereco'])->name('enderecos.create');
Route::post('/enderecos/storeendereco', [EnderecoController::class, 'storeendereco'])->name('enderecos.store');
Route::get('/enderecos/showendereco/{id}', [EnderecoController::class, 'showendereco'])->name('enderecos.show');
Route::get('/enderecos/editendereco/{id}', [EnderecoController::class, 'editendereco'])->name('enderecos.edit');
Route::put('/enderecos/updateendereco/{id}', [EnderecoController::class, 'updateendereco'])->name('enderecos.update');
Route::delete('/enderecos/{id}', [EnderecoController::class, 'destroyendereco'])->name('enderecos.delete');


//Rota vendas
Route::get('/vendas/indexvendas', [VendaController::class, 'indexvendas'])->name('vendas.index');
Route::get('/vendas/createvendas', [VendaController::class, 'createvendas'])->name('vendas.create');
Route::post('/vendas/storevendas', [VendaController::class, 'storevendas'])->name('vendas.store');

//Rota Itens Vendas
Route::get('/itensvendas/indexitensvendas', [ItensVendaController::class, 'indexitensvendas'])->name('itensvendas.index');
Route::get('/itensvendas/createitensvenda', [ItensVendaController::class, 'createitensvendas'])->name('itensvendas.create');
Route::post('/itensvendas/storeitensvendas', [ItensVendaController::class, 'storeitensvendas'])->name('itensvendas.store');

//Rota entradas
Route::get('/entradas/indexentrada', [EntradaController::class, 'indexentrada'])->name('entradas.index');
Route::get('/entradas/createentrada', [EntradaController::class, 'createentrada'])->name('entradas.create');
Route::post('/entradas/storeentrada', [EntradaController::class, 'storeentrada'])->name('entradas.store');

//Rota produto
Route::get('/produtos/indexproduto', [ProdutoController::class, 'indexproduto'])->name('produtos.index');
Route::get('/produtos/createproduto', [ProdutoController::class, 'createproduto'])->name('produtos.create');
Route::post('/produtos/storeproduto', [ProdutoController::class, 'storeproduto'])->name('produtos.store');

//Rota itens entradas
Route::get('/itensentradas/indexitensentradas', [ItensEntradaController::class, 'indexitensentradas'])->name('itensentradas.index');
Route::get('/itensentradas/createitensentradas', [ItensEntradaController::class, 'createitensentradas'])->name('itensentradas.create');
Route::post('/itensentradas/storeitensentradas', [ItensEntradaController::class, 'storeitensentradas'])->name('itensentradas.store');

//Rota prinscipal
Route::get('/', function () {
    return view('welcome');
});