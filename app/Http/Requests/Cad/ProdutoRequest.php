<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:180',
            'ean' => 'max:30',
            'tipo' => 'max:30',
            'ativo' => 'boolean',
            'movestoque' => 'boolean'
        ];
    }
}
