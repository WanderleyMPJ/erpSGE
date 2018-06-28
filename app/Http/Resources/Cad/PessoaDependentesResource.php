<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaDependentesResource extends JsonResource
{
    private $isCollection;

    public function __construct($resource, $isCollection = false)
    {
        parent::__construct($resource);
        $this->isCollection = $isCollection;
    }

    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'tipo' => $this->PessoaDependenteTipo->nome,
            'pessoa' => $this->dependente,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];

        return $data;
    }

}
