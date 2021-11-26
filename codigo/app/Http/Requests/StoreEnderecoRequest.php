<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoRequest extends FormRequest
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
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cliente_id' => 'required|numeric',
        ];
    }

    public function messages(){
        return[
            'logradouro.required' => 'O campo logradouro é obrigatorio.',
            'bairro.required' => 'O campo bairro é obrigatorio.',
            'cidade.required' => 'O campo cidade é obrigatorio.',
            'cliente_id.required' => 'O campo cliente_id é obrigatorio.',
            'cliente_id.numeric' => 'O campo cliente_id é númerico.',
        ];  
    }
}
