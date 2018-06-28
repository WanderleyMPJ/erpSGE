<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaPessoaGrupoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'pessoa' => new PessoaResource($this->resource),
            'grupos' => PessoaGrupoResource::collection($this->resource->pessoagrupos)
        ];
    }
}
