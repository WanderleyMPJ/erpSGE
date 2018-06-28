<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\MovNatOperacaoRequest;
use App\Http\Resources\Cad\MovNatOperacaoResource;
use App\Models\Cad\MovNatOperacao;


class MovNatOperacaoController extends Controller
{
    public function index()
    {
        return MovNatOperacaoResource::collection(MovNatOperacao::all());
    }

    public function store(MovNatOperacaoRequest $request)
    {
        $natoperacao = MovNatOperacao::create($request->all());
        $natoperacao->refresh(); // devido ao default active para atualizar quando não e passado

        return new MovNatOperacaoResource($natoperacao);
    }

    public function show(MovNatOperacao $natoperacao)
    {
        return new MovNatOperacaoResource($natoperacao);
    }

    public function update(MovNatOperacaoRequest $request, MovNatOperacao $natoperacao)
    {
        $natoperacao->fill($request->all());
        $natoperacao->save();

        return new MovNatOperacaoResource($natoperacao);
    }

    public function destroy(MovNatOperacao $natoperacao)
    {
        $natoperacao->delete();

        return response()->json([], 204);
    }
}
