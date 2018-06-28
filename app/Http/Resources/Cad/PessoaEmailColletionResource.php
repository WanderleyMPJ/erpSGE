<?php

namespace App\Http\Resources\Cad;

use App\Models\Cad\Pessoa;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PessoaEmailColletionResource extends ResourceCollection
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
            'emails' => $this->collection->map(function ($email){
                return new PessoaEmailResource($email, true);
            })
        ];
    }
}
