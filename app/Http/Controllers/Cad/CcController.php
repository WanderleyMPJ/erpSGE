<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\CcRequest;
use App\Http\Resources\Cad\CcResource;
use App\Models\Cad\Cc;

class CcController extends Controller
{
    public function index()
    {
        return CcResource::collection(Cc::all());
    }

    public function store(CcRequest $request)
    {
        $cc = Cc::create($request->all());
        $cc->refresh(); // devido ao default active para atualizar quando não e passado

        return new CcResource($cc);
    }

    public function show(Cc $cc)
    {
        return new CcResource($cc);
    }

    public function update(CcRequest $request, Cc $cc)
    {
        $cc->fill($request->all());
        $cc->save();

        return new CcResource($cc);
    }

    public function destroy(Cc $cc)
    {
        $cc->delete();

        return response()->json([], 204);
    }

}
