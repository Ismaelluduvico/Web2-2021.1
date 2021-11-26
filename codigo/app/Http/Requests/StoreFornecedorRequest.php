<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
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
            'nomeFornecedor' => 'required',
            'descricaoFornecedor' => 'required',
            'telefoneFornecedor' => 'required|numeric',
        ];
    }
    
    public function messages(){
        return[
            'nomeFornecedor.required' => 'O campo nome é obrigatorio.',
            'descricaoFornecedor.required' => 'O campo descricao é obrigatorio.',
            'telefoneFornecedor.required' => 'O campo debito é obrigatorio.',
            'telefoneFornecedor.numeric' => 'O campo Telefone é númerico.',
        ];  
    }
}
