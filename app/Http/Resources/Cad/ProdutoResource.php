<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ean' => $this->ean,
            'nome' => $this->nome,
            'tipo' => $this->tipo,
            'movestoque' => (bool)$this->movestoque,
            'ativo' => (bool)$this->ativo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
