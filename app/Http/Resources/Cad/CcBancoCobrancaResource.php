<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class CcBancoCobrancaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'convenio' => $this->convenio,
            'carteira'=> $this->carteira,
            'cc_banco_id' => $this->cc_banco_id,
            'banco' => new CcBancoResource($this->ccBanco),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
