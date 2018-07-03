<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class CcBancoCobrancaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cc_banco_id' => 'required|exists:cc_bancos,id',
            'convenio' => 'required',
            'carteira' => 'required'
        ];    }
}
