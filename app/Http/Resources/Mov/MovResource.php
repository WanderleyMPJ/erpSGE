<?php

namespace App\Http\Resources\Mov;

use App\Http\Resources\Cad\MovNatOperacaoResource;
use App\Http\Resources\Cad\PessoaResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MovResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'data' => $this->data->format('d/m/Y'),
            'documento' => $this->documento,
            'valorbruto' => (float)$this->valorbruto,
            'desconto' => (float)$this->desconto,
            'acrescimo' => (float)$this->acrescimo,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'pessoa' => new PessoaResource($this->pessoa),
            'formapg' => new PessoaResource($this->formapg),
            'movnatoperacao' => new MovNatOperacaoResource($this->movnatoperacao)
        ];

        return $data;
    }
}
