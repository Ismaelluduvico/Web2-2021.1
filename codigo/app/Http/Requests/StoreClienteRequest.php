<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FullName;

class StoreClienteRequest extends FormRequest
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
            'nome' => ['required', new FullName],
            'descricao' => 'required',
            'debito' => 'required|numeric',
        ];
    }
    public function messages(){
        return[
            'nome.required' => 'O campo nome é obrigatorio.',
            'descricao.required' => 'O campo descricao é obrigatorio.',
            'debito.required' => 'O campo debito é obrigatorio.',
            'debito.numeric' => 'O campo debito é númerico.',
        ];  
    }
}
