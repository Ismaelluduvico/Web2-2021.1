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

Route::get('/', function () {
    return view('login.login');
});

/*
rota de teste
*/
Route::get('/layouts/main', function () {
    return view('layouts.main');
});

Route::get('/clientes/list_clientes', function () {
    return view('clientes.list_clientes');
});
Route::get('/clientes/new_clientes', function () {
    return view('clientes.new_clientes');
});
Route::get('/clientes/edit_clientes', function () {
    return view('clientes.edit_clientes');
});

Route::get('/linhas/list_linhas', function () {
    return view('linhas.list_linhas');
});
Route::get('/linhas/new_linhas', function () {
    return view('linhas.new_linhas');
});
Route::get('/linhas/edit_linhas', function () {
    return view('linhas.edit_linhas');
});

Route::get('/materiais/list_materiais', function () {
    return view('materiais.list_materiais');
});
Route::get('/materiais/new_materiais', function () {
    return view('materiais.new_materiais');
});
Route::get('/materiais/edit_materiais', function () {
    return view('materiais.edit_materiais');
});

Route::get('/modelos/list_modelos', function () {
    return view('modelos.list_modelos');
});
Route::get('/modelos/new_modelos', function () {
    return view('modelos.new_modelos');
});
Route::get('/modelos/edit_modelos', function () {
    return view('modelos.edit_modelos');
});

Route::get('/orcamentos/list_orcamentos', function () {
    return view('orcamentos.list_orcamentos');
});
Route::get('/orcamentos/new_orcamentos', function () {
    return view('orcamentos.new_orcamentos');
});
Route::get('/orcamentos/edit_orcamentos', function () {
    return view('orcamentos.edit_orcamentos');
});

Route::get('/produtos/list_produtos', function () {
    return view('produtos.list_produtos');
});
Route::get('/produtos/new_produtos', function () {
    return view('produtos.new_produtos');
});