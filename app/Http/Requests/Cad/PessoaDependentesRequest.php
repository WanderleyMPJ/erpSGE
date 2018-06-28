<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class PessoaDependentesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pessoa_dependente_tipo_id' => 'required|exists:Pessoa_dependente_tipos,id',
            'pessoa_dependente_id' => 'required|exists:Pessoas,id'
        ];
    }
}
