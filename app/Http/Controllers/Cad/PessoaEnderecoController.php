<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaEnderecoRequest;
use App\Http\Resources\Cad\PessoaEnderecoResource;
use App\Models\Cad\PessoaEndereco;
use Illuminate\Http\Request;

class PessoaEnderecoController extends Controller
{
    public function index()
    {
        return PessoaEnderecoResource::collection(PessoaEndereco::all());
    }

    public function store(PessoaEnderecoRequest $request)
    {
        $pessoaendereco = PessoaEndereco::create($request->all());
        $pessoaendereco->refresh(); // devido ao default active para atualizar quando não e passado

        return new PessoaEnderecoResource($pessoaendereco);
    }

    public function show(PessoaEndereco $pessoaendereco)
    {
        return new PessoaEnderecoResource($pessoaendereco);
    }

    public function update(PessoaEnderecoRequest $request, PessoaEndereco $pessoaendereco)
    {
        $pessoaendereco->fill($request->all());
        $pessoaendereco->save();

        return new PessoaEnderecoResource($pessoaendereco);
    }

    public function destroy(PessoaEndereco $pessoaendereco)
    {
        $pessoaendereco->delete();

        return response()->json([], 204);
    }
}
