<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Http\Requests\StoreEntradaRequest;

class EntradaController extends Controller
{

    public function indexentrada(){
        $entrada = Entrada::all();
        
        return view('entradas.indexentrada',['entrada'=>$entrada]);
    }

    public function createentrada(){
        return view('entradas.createentrada');
    }

    public function storeentrada(StoreEntradaRequest $request){

        $entrada = new Entrada();
        $entrada->valor_total_da_nota = $request->valor_total_da_nota;
        $entrada->data_entrada = $request->data_entrada;
        $entrada->save();
        return redirect()->route('entradas.index');;
    }
}
