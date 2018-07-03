<?php

namespace App\Http\Requests\Mov;

use Illuminate\Foundation\Http\FormRequest;

class MovRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          //  'data' => 'date|required',
            'data' => 'required|date_format:"d/m/Y"',
            'pessoa_id' => 'required|exists:pessoas,id',
            'mov_nat_operacao_id' => 'required|exists:mov_nat_operacaos,id',
            'mov_nat_operacao_id' => 'exists:formapgs,id'
        ];
    }
}
