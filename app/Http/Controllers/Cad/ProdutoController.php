<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\ProdutoRequest;
use App\Http\Resources\Cad\ProdutoResource;
use App\Models\Cad\Produto;
use App\Common\funcoes;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    use funcoes;

    public function index(Request $request)
    {
        $query = Produto::query();
        $query = $this->onlyTrashedIfRequested($request, $query);
        $produtos = $query->paginate(15);
        return ProdutoResource::collection($produtos);
    }

    public function store(ProdutoRequest $request)
    {
        $request->tipo =  mb_strtoupper($request->tipo);
        $this->assertTipo($request->tipo);
        $produto = Produto::create($request->all());
        $produto->refresh();
        return new ProdutoResource($produto);
    }

    public function show(Produto $produto)
    {
        return new ProdutoResource($produto);
    }

    public function update(ProdutoRequest $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();
        return new ProdutoResource($produto);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response([], 204);
    }

    public function restore(Produto $produto){
        $produto->restore();
        return response()->json([], 204);
    }

    private function AssertTipo ($tipo)
    {
        if ($tipo != 'PRODUTO') {
            if ($tipo != 'SERVICO') {
                abort(404, 'O tipo tem que ser PRODUTO ou SERVICO');
            }
        }
    }

}
