<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaTelefoneResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'descricao' => $this->descricao,
            'numero' => $this->numero
        ];

        return $data;
   }
}
