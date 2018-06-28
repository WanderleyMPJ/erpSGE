<?php

namespace App\Http\Requests\Cad;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoProdutoGrupoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

   public function rules()
    {
        return [
            'produtogrupos' => 'required|exists:produto_grupos,id'
        ];
    }
}
