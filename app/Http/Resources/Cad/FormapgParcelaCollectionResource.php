<?php

namespace App\Http\Resources\Cad;

use App\Models\Cad\Formapg;
use Illuminate\Http\Resources\Json\ResourceCollection;


class FormapgParcelaCollectionResource extends ResourceCollection
{
    private $formapg;

    public function __construct($resource, Formapg $formapg)
    {
        $this->formapg = $formapg;
        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            'formapg' => new FormapgResource($this->formapg),
            'formapgparcelas' => $this->collection->map(function ($formapgparcela){
                return new FormapgParcelaResource($formapgparcela, true);
            })
        ];
    }
}
