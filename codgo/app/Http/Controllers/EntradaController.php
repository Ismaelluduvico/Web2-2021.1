<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{

    public function indexentrada(){
        $entrada = Entrada::all();
        
        return view('entradas.indexentrada',['entrada'=>$entrada]);
    }

    public function createentrada(){
        return view('entradas.createentrada');
    }

    public function storeentrada(Request $request){

        $request->validate([
            'valor_total_da_nota' => 'required',
        ]);

        $entrada = new Entrada();
        $entrada->valor_total_da_nota = $request->valor_total_da_nota;
        $entrada->data_entrada = $request->data_entrada;
        $entrada->save();
        return redirect('entradas/indexentrada');
    }
}
