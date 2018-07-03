<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\CcTipoRequest;
use App\Http\Resources\Cad\CcTipoResource;
use App\Models\Cad\CcTipo;

class CcTipoController extends Controller
{
    public function index()
    {
        return CcTipoResource::collection(CcTipo::all());
    }

    public function store(CcTipoRequest $request)
    {
        $cctipo = CcTipo::create($request->all());
        $cctipo->refresh(); // devido ao default active para atualizar quando não e passado

        return new CcTipoResource($cctipo);
    }

    public function show(CcTipo $cctipo)
    {
        return new CcTipoResource($cctipo);
    }

    public function update(CcTipoRequest $request, CcTipo $cctipo)
    {
        $cctipo->fill($request->all());
        $cctipo->save();

        return new CcTipoResource($cctipo);
    }

    public function destroy(CcTipo $cctipo)
    {
        $cctipo->delete();

        return response()->json([], 204);
    }

}
