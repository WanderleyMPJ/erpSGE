<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\FormapgParcelaRequest;
use App\Http\Resources\Cad\FormapgParcelaResource;
use App\Models\Cad\FormapgParcela;


class FormapgParcelaController extends Controller
{
    public function index()
    {
        return FormapgParcelaResource::collection(FormapgParcela::all());
    }

    public function store(FormapgParcelaRequest $request)
    {
        $formapgparcela = FormapgParcela::create($request->all());
        return new FormapgParcelaResource($formapgparcela);
    }

    public function show(FormapgParcela $formapgparcela)
    {
        return new FormapgParcelaResource($formapgparcela);
    }

    public function update(FormapgParcelaRequest $request, FormapgParcela $formapgparcela)
    {
        $formapgparcela->fill($request->all());
        $formapgparcela->save();

        return new FormapgParcelaResource($formapgparcela);
    }

    public function destroy(FormapgParcela $formapgparcela)
    {
        $formapgparcela->delete();

        return response()->json([], 204);
    }

}
