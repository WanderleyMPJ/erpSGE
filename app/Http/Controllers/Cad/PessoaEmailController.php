<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaEmailRequest;
use App\Http\Resources\Cad\PessoaEmailResource;
use App\Models\Cad\PessoaEmail;


class PessoaEmailController extends Controller
{
    public function index()
    {
        return PessoaEmailResource::collection(PessoaEmail::all());
    }

    public function store(PessoaEmailRequest $request)
    {
        $pessoaemail = PessoaEmail::create($request->all());
        $pessoaemail->refresh(); // devido ao default active para atualizar quando não e passado

        return new PessoaEmailResource($pessoaemail);
    }

    public function show(PessoaEmail $pessoaemail)
    {
        return new PessoaEmailResource($pessoaemail);
    }

    public function update(PessoaEmailRequest $request, PessoaEmail $pessoaemail)
    {
        $pessoaemail->fill($request->all());
        $pessoaemail->save();

        return new PessoaEmailResource($pessoaemail);
    }

    public function destroy(PessoaEmail $pessoaemail)
    {
        $pessoaemail->delete();

        return response()->json([], 204);
    }

}
