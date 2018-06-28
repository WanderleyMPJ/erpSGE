<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaEmailResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'descricao' => $this->descricao,
            'email' => $this->email,
            'pessoa_id' => $this->pessoa_id
        ];

        return $data;
    }
}
