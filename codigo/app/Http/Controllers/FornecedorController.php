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
        $fornecedor->descricaoFornecedor = $request->descricaoFornecedor;
        $fornecedor->telefoneFornecedor = $request->telefoneFornecedor;
        $fornecedor->save();
        return redirect('fornecedores/indexfornecedor');
    }

    public function showfornecedor($id){
        if($id){
            $fornecedor = Fornecedor::where('id',$id)->get();
        }else{
            $fornecedor = Fornecedor::all();
        }
        return view('fornecedores.showfornecedor',['fornecedor'=>$fornecedor]);
    }

    public function editfornecedor($id){
        $fornecedor = Fornecedor::find($id);
        return view('fornecedores.editfornecedor', ['fornecedor'=>$fornecedor]);
    }

    public function updatefornecedor(Request $request){
        Fornecedor::find($request->id)->update($request->except('_method'));
        return redirect('fornecedores/indexfornecedor')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroyfornecedor($id){
        Fornecedor::findOrFail($id)->delete();
        return redirect('fornecedores/indexfornecedor')->with('msg', 'fornecedor apagado');
    }
}
