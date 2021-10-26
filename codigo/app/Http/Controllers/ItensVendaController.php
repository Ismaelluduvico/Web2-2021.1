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
        $itensvendas = new ItensVenda();
        $itensvendas->vendas_id = $request->vendas_id;
        $itensvendas->save();
        return redirect('itensvendas/indexitensvendas');
    }
}
