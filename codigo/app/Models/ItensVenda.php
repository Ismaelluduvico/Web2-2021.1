<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    use HasFactory;
    protected $table = "itensvendas";
    
    protected $fillable = ['quantidade_de_itens', 'valor', 'venda_id'];

    public function cliente(){
        return $this->belongnsTo(Venda::class,'venda_id', 'id');
    }
}
