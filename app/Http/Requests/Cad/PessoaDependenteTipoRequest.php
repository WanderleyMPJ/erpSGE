<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class PessoaDependenteTipoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:255'
        ];
    }
}
