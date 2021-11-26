<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendaRequest extends FormRequest
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
            'data_venda' => 'required|numeric',
            'valor_total' => 'required|numeric',
        ];
    }
    public function messages(){
        return[
            'data_venda.required' => 'O campo data_venda é obrigatorio.',
            'data_venda.numeric' => 'O campo data_venda é númerico.',
            'valor_total.required' => 'O campo descricao é obrigatorio.',
            'valor_total.numeric' => 'O campo valor_total é númerico.',
        ];  
    }
}
