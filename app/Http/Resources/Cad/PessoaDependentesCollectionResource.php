<?php

namespace App\Http\Resources\Cad;

use App\Models\Cad\Pessoa;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PessoaDependentesCollectionResource extends ResourceCollection
{
    private $pessoa;

    public function __construct($resource, Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            'pessoa' => new PessoaResource($this->pessoa),
            'dependentes' => $this->collection->map(function ($dependente){
                return new PessoaDependentesResource($dependente, true);
            })
        ];
    }
}
