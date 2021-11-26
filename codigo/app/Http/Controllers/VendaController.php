<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Http\Requests\StoreVendaRequest;

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

    public function storevendas(StoreVendaRequest $request){
        
        $venda = new Venda();
        $venda->data_venda = $request->data_venda;
        $venda->valor_total = $request->valor_total;
        $venda->save();
        return redirect('vendas/indexvendas');
    }
}
