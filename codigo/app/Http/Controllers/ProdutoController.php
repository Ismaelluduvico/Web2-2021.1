<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function indexproduto(){
        $produtos = Produto::all();
        
        return view('produtos.indexproduto',['produtos'=>$produtos]);
    }

    public function createproduto(){
        return view('produtos.createproduto');
    }

    public function storeproduto(Request $request){
        $produtos = new Produto();
        $produtos->nome_produto = $request->nome_produto;
        $produtos->codigo_produto = $request->codigo_produto;
        $produtos->save();
        return redirect('produtos/indexproduto');
    }
}
