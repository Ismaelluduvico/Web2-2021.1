<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensEntrada extends Model
{
    use HasFactory;
    protected $table = "itensentradas";

    protected $fillable = ['pre_cocompra','quantidade','ipi','frete','icms','entrada_id','produto_id'];

    public function entrada(){
        return $this->belongnsTo(Entrada::class,'entrada_id', 'id');
    }

    public function produto(){
        return $this->belongnsTo(Produto::class,'produto_id', 'id');
    }
    
}
