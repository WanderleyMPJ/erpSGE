<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class MovNatOperacaoResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'nome' => $this->nome,
            'tipo' => $this->tipo,
            'ativo' => (bool)$this->ativo,
            'movestoque' => (bool)$this->ativo,
            'movfinanceiro' => (bool)$this->ativo
        ];

        return $data;
    }
}
