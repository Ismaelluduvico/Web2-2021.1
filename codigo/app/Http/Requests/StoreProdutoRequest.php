<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'nome_produto' => 'required',
            'quantidade' => 'required|numeric',
            'data_venciemtno' => 'required|numeric',
        ];
    }

    public function messages(){
        return[
            'nome_produto.required' => 'O campo nome é obrigatorio.',
            'quantidade.required' => 'O campo quantidade é obrigatorio.',
            'quantidade.numeric' => 'O campo data_venciemtno é númerico.',
            'data_venciemtno.required' => 'O campo data_venciemtno é obrigatorio.',
            'data_venciemtno.numeric' => 'O campo data_venciemtno é númerico.',
        ];  
    }
}
