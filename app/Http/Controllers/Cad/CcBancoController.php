<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\CcBancoRequest;
use App\Http\Resources\Cad\CcBancoResource;
use App\Models\Cad\CcBanco;


class CcBancoController extends Controller
{
    public function index()
    {
        return CcBancoResource::collection(CcBanco::all());
    }

    public function store(CcBancoRequest $request)
    {
        $ccbanco = CcBanco::create($request->all());
        $ccbanco->refresh(); // devido ao default active para atualizar quando não e passado

        return new CcBancoResource($ccbanco);
    }

    public function show(CcBanco $ccbanco)
    {
        return new CcBancoResource($ccbanco);
    }

    public function update(CcBancoRequest $request, CcBanco $ccbanco)
    {
        $ccbanco->fill($request->all());
        $ccbanco->save();

        return new CcBancoResource($ccbanco);
    }

    public function destroy(CcBanco $ccbanco)
    {
        $ccbanco->delete();

        return response()->json([], 204);
    }

}
