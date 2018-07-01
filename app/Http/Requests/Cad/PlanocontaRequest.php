<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class PlanocontaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo' => 'required',
            'nome' => 'required|max:180',
            'ativo' => 'boolean',
            'parent_id' =>'exists:Planocontas,id|'
        ];
    }
}
