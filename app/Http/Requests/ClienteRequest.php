<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            //['nome', 'cpf', 'rg','idCidade','endereco','bairro','cep', 'telefone','email'];
            'nome' => 'required',
            'cpf' => 'required|cpf|min:13|max:13',
            'rg' => 'required',
            'cidade_id' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'cep' => 'required',
            'telefone' => 'required',
            'email' => 'required'            
        ];
    }
}