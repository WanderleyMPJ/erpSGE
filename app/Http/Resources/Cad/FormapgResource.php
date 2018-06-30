<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class FormapgResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'nome' => $this->nome,
            'ativo' => (bool)$this->ativo,
            'formapgtipo' => new FormapgTipoResource($this->FormapgTipo)

        ];

        return $data;
    }
}
