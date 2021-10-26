<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    //
    public function indexvendas(){
        $vendas = Venda::all();
        
        return view('vendas.indexvendas',['vendas'=>$vendas]);
    }

    public function createvendas(){
        return view('vendas.createvendas');
    }

    public function storevendas(Request $request){
        $venda = new Venda();
        $venda->quantvendas = $request->quantvendas;
        $venda->save();
        return redirect('vendas/indexvendas');
    }
}
