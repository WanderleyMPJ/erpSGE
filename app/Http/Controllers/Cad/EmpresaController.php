<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\EmpresaRequest;
use App\Http\Resources\Cad\EmpresaResource;
use App\Models\Cad\Empresa;


class EmpresaController extends Controller
{
    public function index()
    {
        return EmpresaResource::collection(Empresa::all());
    }

    public function store(EmpresaRequest $request)
    {
        $empresa = Empresa::create($request->all());
        $empresa->refresh(); // devido ao default active para atualizar quando não e passado

        return new EmpresaResource($empresa);
    }

    public function show(Empresa $empresa)
    {
        return new EmpresaResource($empresa);
    }

    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->fill($request->all());
        $empresa->save();

        return new EmpresaResource($empresa);
    }

    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return response()->json([], 204);
    }

}
