<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensVenda;

class ItensVendaController extends Controller
{
    //
    public function indexitensvendas(){
        $itensvendas = ItensVenda::all();
        
        return view('itensvendas.indexitensvendas',['itensvendas'=>$itensvendas]);
    }

    public function createitensvendas(){
        return view('itensvendas.createitensvenda');
    }

    public function storeitensvendas(Request $request){

        $request->validate([
            'quantidade_de_itens' => 'required',
            'valor' => 'required',
            'venda_id' => 'required',
        ]);

        $itensvendas = new ItensVenda();
        $itensvendas->quantidade_de_itens = $request->quantidade_de_itens;
        $itensvendas->valor = $request->valor;
        $itensvendas->venda_id = $request->venda_id;
        $itensvendas->save();
        return redirect('itensvendas/indexitensvendas');
    }
}
