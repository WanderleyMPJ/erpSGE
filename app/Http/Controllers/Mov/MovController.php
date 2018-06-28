<?php

namespace App\Http\Controllers\Mov;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mov\MovRequest;
use App\Http\Resources\Mov\MovResource;
use App\Models\Mov\Mov;

class MovController extends Controller
{
    public function index()
    {
        return MovResource::collection(Mov::all());
    }

    public function store(MovRequest $request)
    {
        $mov = Mov::create($request->all());
        $mov->refresh(); // devido ao default active para atualizar quando não e passado

        return new MovResource($mov);
    }

    public function show(Mov $mov)
    {
        return new MovResource($mov);
    }

    public function update(MovRequest $request, Mov $mov)
    {
        $mov->fill($request->all());
        $mov->save();

        return new MovResource($mov);
    }

    public function destroy(Mov $mov)
    {
        $mov->delete();

        return response()->json([], 204);
    }
}
