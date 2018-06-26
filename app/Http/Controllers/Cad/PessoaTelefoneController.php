<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaTelefoneRequest;
use App\Http\Resources\Cad\PessoaTelefoneColletionResource;
use App\Http\Resources\Cad\PessoaTelefoneResource;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaTelefone;
use Illuminate\Http\Request;

class PessoaTelefoneController extends Controller
{
    public function index()
    {
        return PessoaTelefoneResource::collection(PessoaTelefone::all());
    }

    public function store(PessoaTelefoneRequest $request)
    {
        $pessoatelefone = PessoaTelefone::create($request->all());
        $pessoatelefone->refresh(); // devido ao default active para atualizar quando não e passado

        return new PessoaTelefoneResource($pessoatelefone);
    }

    public function show(PessoaTelefone $pessoatelefone)
    {
        return new PessoaTelefoneResource($pessoatelefone);
    }

    public function update(PessoaTelefoneRequest $request, PessoaTelefone $pessoatelefone)
    {
        $pessoatelefone->fill($request->all());
        $pessoatelefone->save();

        return new PessoaTelefoneResource($pessoatelefone);
    }

    public function destroy(PessoaTelefone $pessoatelefone)
    {
        $pessoatelefone->delete();

        return response()->json([], 204);
    }

}
