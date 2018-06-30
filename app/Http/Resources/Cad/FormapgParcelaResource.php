<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class FormapgParcelaResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'dias' => $this->dias
        ];

        return $data;
    }
}
