<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class CcBancoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'numero' => $this->numero,
            'agencia'=> $this->agencia,
            'conta' => $this->conta,
            'cc_id' => $this->cc_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
