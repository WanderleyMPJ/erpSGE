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
            'data' => 'date|required',
            'pessoa_id' => 'required|exists:pessoas,id',
            'mov_nat_operacao_id' => 'required|exists:mov_nat_operacaos,id'
        ];
    }
}
