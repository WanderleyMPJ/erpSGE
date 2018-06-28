<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class MovNatOperacaoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo' => 'required|max:1',
            'nome' => 'required|max:100'
        ];
    }
}
