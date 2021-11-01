<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = "vendas";

    protected $fillable = ['data_venda', 'valor_total'];

    function itensvenda(){
        return $this->hasMany(ItensVenda::class, 'venda_id', 'id');
    }
}
