<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensVenda;
use App\Http\Requests\StoreItensVendaRequest;

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

    public function storeitensvendas(StoreItensVendaRequest $request){

        $itensvendas = new ItensVenda();
        $itensvendas->quantidade_de_itens = $request->quantidade_de_itens;
        $itensvendas->valor = $request->valor;
        $itensvendas->venda_id = $request->venda_id;
        $itensvendas->save();
        return redirect('itensvendas/indexitensvendas');
    }
}
