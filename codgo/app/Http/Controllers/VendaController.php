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

        $request->validate([
            'data_venda' => 'required',
            'valor_total' => 'required',
        ]);
        
        $venda = new Venda();
        $venda->data_venda = $request->data_venda;
        $venda->valor_total = $request->valor_total;
        $venda->save();
        return redirect('vendas/indexvendas');
    }
}
