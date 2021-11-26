<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;

use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    //Criando uma função
    public function index(){
        $clientes = Cliente::all();
        
        return view('clientes.index',['clientes'=>$clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(StoreClienteRequest $request){

            $cliente = new Cliente();
            $cliente->nome = $request->nome;
            $cliente->descricao = $request->descricao;
            $cliente->debito = $request->debito;
            $cliente->save();
            return redirect()->route('clientes.index');
    }

    public function show($id){
        if($id){
            $cliente = Cliente::where('id',$id)->get();
        }else{
            $cliente = Cliente::all();
        }
        return view('clientes.show',['clientes'=>$cliente]);
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit',['cliente'=>$cliente]);
    }

    public function update(StoreClienteRequest $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect()->route('clientes.index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Cliente::findOrFail($id)->delete();
        return redirect()->route('clientes.index')->with('msg', 'Cliente apagado');
    }

    public function showendereco(){
        $clientes = Cliente::all();

            foreach($clientes as $cliente){
                echo "<p> Cliente: $cliente->nome<p>";
                echo "<p> Descrição: $cliente->descricao<p>";

                $enderecos = $cliente->endereco()->get();

                if(count($enderecos)>0){
                    echo "<h1>Endereço<h1>";
                        foreach($enderecos as $endereco){
                            echo"<p>[$endereco->id, $endereco->logradouro]<p>";
                        }
                }
            }
            echo"<br>";
    }
}