<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensVendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'quantidade_de_itens' => 'required|numeric',
            'valor' => 'required|numeric',
            'venda_id' => 'required|numeric',
        ];
    }

    public function messages(){
        return[
            'quantidade_de_itens.required' => 'O campo nomquantidade_de_itense é obrigatorio.',
            'quantidade_de_itens.numeric' => 'O campo quantidade_de_itens é númerico.',
            'valor.required' => 'O campo valor é obrigatorio.',
            'valor.numeric' => 'O campo valor é númerico.',
            'venda_id.required' => 'O campo venda_id é obrigatorio.',
            'venda_id.numeric' => 'O campo venda_id é númerico.',
        ];  
    }
}
