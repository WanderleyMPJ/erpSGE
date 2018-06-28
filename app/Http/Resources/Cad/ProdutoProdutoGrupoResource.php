<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoProdutoGrupoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'produto' => new ProdutoResource($this->resource),
            'grupos' => ProdutoGrupoResource::collection($this->resource->produtogrupos)
        ];
    }
}
