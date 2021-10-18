<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    //
    public function indexfornecedor(){
        $fornecedores = Fornecedor::all();
        
        return view('fornecedores.indexfornecedor',['fornecedor'=>$fornecedores]);
    }

    public function createfornecedor(){
        return view('fornecedores.createfornecedor');
    }

    public function storefornecedor(Request $request){
        $fornecedor = new Fornecedor();
        $fornecedor->nomeFornecedor = $request->nomeFornecedor;
        $fornecedor->enderecoFornecedor = $request->enderecoFornecedor;
        $fornecedor->telefoneFornecedor = $request->telefoneFornecedor;
        $fornecedor->save();
        return redirect('indexfornecedor');
    }
}
