<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoGrupoResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'ativo' => (bool)$this->ativo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
