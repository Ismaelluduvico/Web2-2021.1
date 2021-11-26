<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntradaRequest extends FormRequest
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
            'valor_total_da_nota' => 'required|numeric',
        ];
    }

    public function messages(){
        return[
            'valor_total_da_nota.required' => 'O campo valor_total_da_nota é obrigatorio.',
            'valor_total_da_nota.numeric' => 'O campo valor_total_da_nota é númerico.',
        ];  
    }
}
