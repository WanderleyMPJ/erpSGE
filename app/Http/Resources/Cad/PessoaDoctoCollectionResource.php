<?php

namespace App\Http\Resources\Cad;

use App\Models\Cad\Pessoa;
use Illuminate\Http\Resources\Json\ResourceCollection;


class PessoaDoctoCollectionResource extends ResourceCollection
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
            'pessoadocto' => $this->collection->map(function ($docto){
                return new PessoaDoctoResource($docto, true);
            })
        ];
    }
}
