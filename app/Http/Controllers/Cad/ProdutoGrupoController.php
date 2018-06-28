<?php

namespace App\Http\Controllers\Cad;

use App\Models\Cad\ProdutoGrupo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\ProdutoGrupoRequest;
use App\Http\Resources\Cad\ProdutoGrupoResource;


class ProdutoGrupoController extends Controller
{
    public function index()
    {
        return ProdutoGrupoResource::collection(ProdutoGrupo::all());
    }

    public function store(ProdutoGrupoRequest $request)
    {
        $produtogrupo = ProdutoGrupo::create($request->all());
        $produtogrupo->refresh(); // devido ao default active para atualizar quando não e passado

        return new ProdutoGrupoResource($produtogrupo);
    }

    public function show(ProdutoGrupo $produtogrupo)
    {
        return new ProdutoGrupoResource($produtogrupo);
    }

    public function update(ProdutoGrupoRequest $request, ProdutoGrupo $produtogrupo)
    {
        $produtogrupo->fill($request->all());
        $produtogrupo->save();

        return new ProdutoGrupoResource($produtogrupo);
    }

    public function destroy(ProdutoGrupo $produtogrupo)
    {
        $produtogrupo->delete();

        return response()->json([], 204);
    }

}
