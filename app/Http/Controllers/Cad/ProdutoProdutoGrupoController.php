<?php

namespace App\Http\Controllers\Cad;

use App\Http\Requests\Cad\ProdutoProdutoGrupoRequest;
use App\Http\Resources\Cad\ProdutoProdutoGrupoResource;
use App\Models\Cad\Produto;
use App\Models\Cad\ProdutoGrupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoProdutoGrupoController extends Controller
{
    public function index(Produto $produto)
    {
        return new ProdutoProdutoGrupoResource($produto);
    }

    public function store(ProdutoProdutoGrupoRequest $request, Produto $produto)
    {
        $changed = $produto->produtogrupos()->sync($request->produtogrupos);
        $gruposattachedid = $changed['attached'];
        $grupos = ProdutoGrupo::whereIn('id', $gruposattachedid)->get(); // where id in (1, 3)
        return $grupos->count() ? response()->json(new ProdutoProdutoGrupoResource($produto), 201) : [];
    }

    public function destroy(Produto $produto, ProdutoGrupo $grupo)
    {
        $produto->produtogrupos()->detach($grupo->id);
        return response()->json([], 204);
    }
}