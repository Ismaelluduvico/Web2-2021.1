<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = "entradas";

    protected $fillable = ['valor_total_da_nota', 'data_entrada'];

    function itensEntrada(){
        return $this->hasMany(ItensEntrada::class, 'entrada_id', 'id');
    }
    
}
