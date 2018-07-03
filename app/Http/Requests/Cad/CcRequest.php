<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class CcRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cc_tipo_id' => 'required|exists:cc_tipos,id',
            'empresa_id' => 'required|exists:empresas,id',
            'nome' => 'Required'
        ];
    }
}
