<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnomaliaRequest extends FormRequest
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
            'avariaBateria' => 'required',
            'avariAlternador' => 'required',
            'monitoramento_id' => 'required',
            'veiculo_id' => 'required',
            'tipoAnomalia_id' => 'required',
        ];
    }
}
