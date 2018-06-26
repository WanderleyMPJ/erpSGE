<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaResource extends JsonResource
{
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'nome' => $this->nome,
            'tipo' => $this->tipo,
            'user_id' => $this->user_id,
            'ativo' => (bool)$this->ativo,
            // 'grupos' => PessoaGrupoResource::collection($this->resource->pessoagrupos),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
