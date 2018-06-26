<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class PessoaDoctoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'numero' => 'required|max:40',
            'orgaoemissor' => 'max:60',
     //       'pessoa_id' => 'required|exists:pessoas,id',
            'pessoa_docto_tipo_id' => 'required|exists:pessoa_docto_tipos,id'
        ];
    }
}
