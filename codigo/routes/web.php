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
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clienteindex');
Route::get('/clientes/create', [ClienteController::class, 'create']);
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('store');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clienteshow');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('edit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::get('/clientes/showendereco', [ClienteController::class, 'showendereco'])->name('showendereco');

//Rotas fornecedor
Route::get('/fornecedores/indexfornecedor',[FornecedorController::class, 'indexfornecedor'])->name('indexfornecedor');
Route::get('/fornecedores/createfornecedor',[FornecedorController::class, 'createfornecedor'])->name('createfornecedor');
Route::post('/fornecedores/storefornecedor',[FornecedorController::class, 'storefornecedor'])->name('storefornecedor');
Route::get('/fornecedores/showfornecedor/{id}', [FornecedorController::class, 'showfornecedor'])->name('fornecedorshow');
Route::get('/fornecedores/editfornecedor/{id}', [FornecedorController::class, 'editfornecedor'])->name('fornecedoredit');
Route::put('/fornecedores/updatefornecedor/{id}', [FornecedorController::class, 'updatefornecedor'])->name('fornecedorupdate');
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroyfornecedor'])->name('fornecedordelete');

//Rotas Endereço
Route::get('/enderecos/indexendereco', [EnderecoController::class, 'indexendereco'])->name('enderecoindex');
Route::get('/enderecos/createendereco', [EnderecoController::class, 'createendereco'])->name('enderecocreate');
Route::post('/enderecos/storeendereco', [EnderecoController::class, 'storeendereco'])->name('enderecostore');
Route::get('/enderecos/showendereco/{id}', [EnderecoController::class, 'showendereco'])->name('enderecoshow');
Route::get('/enderecos/editendereco/{id}', [EnderecoController::class, 'editendereco'])->name('enderecoedit');
Route::put('/enderecos/updateendereco/{id}', [EnderecoController::class, 'updateendereco'])->name('enderecoupdate');
Route::delete('/enderecos/{id}', [EnderecoController::class, 'destroyendereco'])->name('enderecodelete');


//Rota vendas
Route::get('/vendas/indexvendas', [VendaController::class, 'indexvendas'])->name('vendaindex');
Route::get('/vendas/createvendas', [VendaController::class, 'createvendas'])->name('vendacreate');
Route::post('/vendas/storevendas', [VendaController::class, 'storevendas'])->name('vendastore');

//Rota Itens Vendas
Route::get('/itensvendas/indexitensvendas', [ItensVendaController::class, 'indexitensvendas'])->name('itensvendaindex');
Route::get('/itensvendas/createitensvenda', [ItensVendaController::class, 'createitensvendas'])->name('itensvendacreate');
Route::post('/itensvendas/storeitensvendas', [ItensVendaController::class, 'storeitensvendas'])->name('itensvendastore');

//Rota entradas
Route::get('/entradas/indexentrada', [EntradaController::class, 'indexentrada'])->name('entradaindex');
Route::get('/entradas/createentrada', [EntradaController::class, 'createentrada'])->name('entradacreate');
Route::post('/entradas/storeentrada', [EntradaController::class, 'storeentrada'])->name('entradastore');

//Rota produto
Route::get('/produtos/indexproduto', [ProdutoController::class, 'indexproduto'])->name('produtoindex');
Route::get('/produtos/createproduto', [ProdutoController::class, 'createproduto'])->name('produtocreate');
Route::post('/produtos/storeproduto', [ProdutoController::class, 'storeproduto'])->name('produtostore');

//Rota entradas
Route::get('/itensentradas/indexitensentradas', [ItensEntradaController::class, 'indexitensentradas'])->name('itensentradaindex');
Route::get('/itensentradas/createitensentradas', [ItensEntradaController::class, 'createitensentradas'])->name('itensentradacreate');
Route::post('/itensentradas/storeitensentradas', [ItensEntradaController::class, 'storeitensentradas'])->name('itensentradastore');

//Rota prinscipal
Route::get('/', function () {
    return view('welcome');
});