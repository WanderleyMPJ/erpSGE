<?php

namespace App\Http\Controllers\Cad;

use App\Http\Requests\Cad\PessoaPessoaGrupoRequest;
use App\Http\Resources\Cad\PessoaPessoaGrupoResource;
use App\Http\Resources\Cad\PessoaResource;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaGrupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoaPessoaGrupoController extends Controller
{
    public function index(Pessoa $pessoa)
    {
        return new PessoaResource($pessoa);
    }

    public function store(PessoaPessoaGrupoRequest $request, Pessoa $pessoa)
    {
        $changed = $pessoa->pessoagrupos()->sync($request->pessoagrupos);
        $pessoagruposattachedid = $changed['attached'];
        $pessoagrupos = PessoaGrupo::whereIn('id', $pessoagruposattachedid)->get(); // where id in (1, 3)
        return $pessoagrupos->count() ? response()->json(new PessoaResource($pessoa),201): [];
    }

    public function destroy(Pessoa $pessoa, Pessoagrupo $pessoagrupo)
    {
        $pessoa->pessoagrupos()->detach($pessoagrupo->id);
        return response()->json([],204);
    }
}
