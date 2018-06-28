<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProdutoGrupoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:180',
            'ativo' => 'boolean'
        ];
    }
}
