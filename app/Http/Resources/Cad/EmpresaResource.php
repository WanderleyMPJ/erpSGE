<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpresaResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'nome' => $this->nome,
            'ativo' => (bool)$this->ativo,
            'pessoa' => new PessoaResource($this->pessoa)
        ];

        return $data;
    }
}
