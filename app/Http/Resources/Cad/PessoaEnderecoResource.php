<?php

namespace App\Http\Resources\Cad;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaEnderecoResource extends JsonResource
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
            'descricao' => $this->descricao,
            'logradouro' => $this->logradouro,
            'bairro' => $this->bairro,
            'municipio' => $this->municipio,
            'uf' => $this->uf,
            'cep' => $this->cep,
            'complemento' => $this->complemento,
            'referencia' => $this->referencia,
        ];

        if (!$this->isCollection){
            $data['pessoa'] = new PessoaResource($this->pessoa);
        }

        return $data;
    }
}
