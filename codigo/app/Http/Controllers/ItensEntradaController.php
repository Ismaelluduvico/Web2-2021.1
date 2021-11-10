<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntrada;

class ItensEntradaController extends Controller
{
    public function indexitensentradas(){
        $itensentradas = ItensEntrada::all();
        
        return view('itensentradas.indexitensentradas',['itensentradas'=>$itensentradas]);
    }

    public function createitensentradas(){
        return view('itensentradas.createitensentradas');
    }

    public function storeitensentradas(Request $request){
        $itensentradas = new ItensEntrada();
        $itensentradas->pre_cocompra = $request->pre_cocompra;
        $itensentradas->quantidade = $request->quantidade;
        $itensentradas->ipi = $request->ipi;
        $itensentradas->frete = $request->frete;
        $itensentradas->icms = $request->icms;
        $itensentradas->entrada_id = $request->entrada_id;
        $itensentradas->produto_id = $request->produto_id;
        $itensentradas->save();
        return redirect('itensentradas/indexitensentradas');
    }
}
