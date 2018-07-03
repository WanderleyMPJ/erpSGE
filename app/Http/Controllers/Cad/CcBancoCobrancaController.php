<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\CcBancoCobrancaRequest;
use App\Http\Resources\Cad\CcBancoCobrancaResource;
use App\Models\Cad\CcBancoCobranca;

class CcBancoCobrancaController extends Controller
{
    public function index()
    {
        return CcBancoCobrancaResource::collection(CcBancoCobranca::all());
    }

    public function store(CcBancoCobrancaRequest $request)
    {
        $ccbancocobranca = CcBancoCobranca::create($request->all());
        $ccbancocobranca->refresh(); // devido ao default active para atualizar quando não e passado

        return new CcBancoCobrancaResource($ccbancocobranca);
    }

    public function show(CcBancoCobranca $ccbancocobranca)
    {
        return new CcBancoCobrancaResource($ccbancocobranca);
    }

    public function update(CcBancoCobrancaRequest $request, CcBancoCobranca $ccbancocobranca)
    {
        $ccbancocobranca->fill($request->all());
        $ccbancocobranca->save();

        return new CcBancoCobrancaResource($ccbancocobranca);
    }

    public function destroy(CcBancoCobranca $ccbancocobranca)
    {
        $ccbancocobranca->delete();

        return response()->json([], 204);
    }

}
