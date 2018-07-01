<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PlanocontaRequest;
use App\Http\Resources\Cad\PlanocontaResource;
use App\Models\Cad\Planoconta;
use Illuminate\Http\Request;

class PlanocontaController extends Controller
{
    public function index()
    {
        return PlanocontaResource::collection(Planoconta::all());
    }

    public function store(PlanocontaRequest $request)
    {
        $this->assertParent($request->id, $request->parent_id);
        $planoconta = Planoconta::create($request->all());
        $planoconta->refresh(); // devido ao default active para atualizar quando não e passado

        return new PlanocontaResource($planoconta);
    }

    public function show(Planoconta $planoconta)
    {
        return new PlanocontaResource($planoconta);
    }

    public function update(PlanocontaRequest $request, Planoconta $planoconta)
    {
        $this->assertParent($planoconta->id, $request->parent_id);
        $planoconta->fill($request->all());
        $planoconta->save();

        return new PlanocontaResource($planoconta);
    }

    public function destroy(Planoconta $planoconta)
    {
        $planoconta->delete();

        return response()->json([], 204);
    }

    private function assertParent($idplano, $idparent){
        if($idplano == $idparent){
            abort(404);
        }
    }
}
