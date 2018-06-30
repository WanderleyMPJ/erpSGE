<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\FormapgTipoRequest;
use App\Http\Resources\Cad\FormapgTipoResource;
use App\Models\Cad\FormapgTipo;

class FormapgTipoController extends Controller
{
    public function index()
    {
        return FormapgTipoResource::collection(FormapgTipo::all());
    }

    public function store(FormapgTipoRequest $request)
    {
        $formapgtipo = FormapgTipo::create($request->all());
        $formapgtipo->refresh(); // devido ao default active para atualizar quando não e passado

        return new FormapgTipoResource($formapgtipo);
    }

    public function show(FormapgTipo $formapgtipo)
    {
        return new FormapgTipoResource($formapgtipo);
    }

    public function update(FormapgTipoRequest $request, FormapgTipo $formapgtipo)
    {
        $formapgtipo->fill($request->all());
        $formapgtipo->save();

        return new FormapgTipoResource($formapgtipo);
    }

    public function destroy(FormapgTipo $formapgtipo)
    {
        $formapgtipo->delete();

        return response()->json([], 204);
    }
}
