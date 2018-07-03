<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class CcBancoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cc_id' => 'required|exists:ccs,id',
            'numero' => 'required',
            'agencia' => 'required',
            'conta' => 'required',
        ];
    }
}
