<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = "enderecos";

    

    /*protected $fillable = [
        'logradouro',
        'bairro',
        'cidade',
        'uf',
        'cliente_id'
    ];*/
    protected $guarded = [];

    public function cliente(){
        return $this->belongnsTo(Cliente::class,'cliente_id', 'id');
    }
}
