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
        $entrada = new Entrada();
        $entrada->quantentradas = $request->quantentradas;
        $entrada->save();
        return redirect('entradas/indexentrada');
    }
}
