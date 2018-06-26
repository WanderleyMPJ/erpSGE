<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaGrupoRequest;
use App\Http\Resources\Cad\PessoaGrupoResource;
use App\Models\Cad\PessoaGrupo;
use Illuminate\Http\Request;

class PessoaGrupoController extends Controller
{
    public function index()
    {
        return PessoaGrupoResource::collection(PessoaGrupo::all());
    }

    public function store(PessoaGrupoRequest $request)
    {
        $pessoagrupo = PessoaGrupo::create($request->all());
        $pessoagrupo->refresh(); // devido ao default active para atualizar quando não e passado

        return new PessoaGrupoResource($pessoagrupo);
    }

    public function show(PessoaGrupo $pessoagrupo)
    {
        return new PessoaGrupoResource($pessoagrupo);
    }

    public function update(PessoaGrupoRequest $request, PessoaGrupo $pessoagrupo)
    {
        $pessoagrupo->fill($request->all());
        $pessoagrupo->save();

        return new PessoaGrupoResource($pessoagrupo);
    }

    public function destroy(PessoaGrupo $pessoagrupo)
    {
        $pessoagrupo->delete();

        return response()->json([], 204);
    }
}
