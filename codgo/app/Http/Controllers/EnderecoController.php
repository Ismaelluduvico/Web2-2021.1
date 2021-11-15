<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    //Criação das funções
    public function indexendereco(){
        $enderecos = Endereco::all();
        
        return view('enderecos.indexendereco',['enderecos'=>$enderecos]);
    }

    public function createendereco(){
        return view('enderecos.createendereco');
    }

    public function storeendereco(Request $request){

        $request->validate([
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cliente_id' => 'required',
        ]);

        $endereco = new Endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->cliente_id = $request->cliente_id;
        $endereco->save();
        return redirect('enderecos/indexendereco');
    }

    public function showendereco($id){
        if($id){
            $endereco = Endereco::where('id',$id)->get();
        }else{
            $endereco = Endereco::all();
        }
        return view('enderecos.showendereco',['enderecos'=>$endereco]);
    }

    public function editendereco($id){
        $endereco = Endereco::find($id);
        return view('enderecos.editendereco',['endereco'=>$endereco]);
    }

    public function updateendereco(Request $request){
        $request->validate([
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cliente_id' => 'required',
        ]);
        
        Endereco::find($request->id)->update($request->except('_method'));
        return redirect('enderecos/indexendereco')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroyendereco($id){
        Endereco::findOrFail($id)->delete();
        return redirect('enderecos/indexendereco')->with('msg', 'Endereco apagado');
    }
}
