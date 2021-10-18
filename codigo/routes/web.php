<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
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
Route::get('/index',[ClienteController::class, 'index']);
Route::get('/create',[ClienteController::class, 'create']);
Route::post('/store',[ClienteController::class, 'store']);

//Rotas fornecedor
Route::get('/indexfornecedor',[FornecedorController::class, 'indexfornecedor']);
Route::get('/createfornecedor',[FornecedorController::class, 'createfornecedor']);
Route::post('/storefornecedor',[FornecedorController::class, 'storefornecedor']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'show']);

Route::get('/fornecedores', [FornecedorController::class, 'show']);
