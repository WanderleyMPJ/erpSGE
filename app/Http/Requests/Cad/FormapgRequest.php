<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class FormapgRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome' => 'required|max:50',
            'formapg_tipo_id' => 'required|exists:formapg_tipos,id'
        ];
    }
}
