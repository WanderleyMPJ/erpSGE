<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class FormapgParcelaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    //        'dias' => 'required|min:0|integer',
      //      'formapg_id' => 'required|exists:formapgs,id'
        ];
    }
}
