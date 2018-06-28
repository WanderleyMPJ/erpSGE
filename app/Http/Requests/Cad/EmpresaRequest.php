<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'max:80',
            'pessoa_id' => 'required|exists:pessoas,id'
        ];
    }
}
