<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensEntradaRequest extends FormRequest
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
            'pre_cocompra' => 'required',
            'quantidade' => 'required|numeric',
            'frete' => 'required|numeric',
        ];
    }

    public function messages(){
        return[
            'pre_cocompra.required' => 'O campo pre_cocompra é obrigatorio.',
            'quantidade.required' => 'O campo quantidade é obrigatorio.',
            'quantidade.numeric' => 'O campo quantidade é númerico.',
            'frete.required' => 'O campo frete é obrigatorio.',
            'frete.numeric' => 'O campo frete é númerico.',
        ];  
    }
}
