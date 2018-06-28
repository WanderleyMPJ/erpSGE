<?php

namespace App\Http\Controllers\Cad;

use App\Http\Requests\Cad\PessoaEmailRequest;
use App\Http\Resources\Cad\PessoaEmailColletionResource;
use App\Http\Resources\Cad\PessoaEmailResource;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoaPessoaEmailController extends Controller
{
    public function index(Pessoa $pessoa)
    {
        return new PessoaEmailColletionResource($pessoa->pessoaemails, $pessoa);
    }

    public function store(PessoaEmailRequest $request, Pessoa $pessoa)
    {
        $input = PessoaEmail::create([
            'pessoa_id' => $pessoa->id,
            'numero' => $request->numero,
            'descricao'=> $request->descricao
        ]);
        return response()->json(new PessoaEmailResource($input), 201 );
    }

    public function show(Pessoa $pessoa, PessoaEmail $email)
    {
        return new PessoaEmailResource($email);
    }

    public function update(Request $request, Pessoa $pessoa, PessoaEmail $email)
    {
        $this->assertPessoaEmail($pessoa, $email);
        $email->fill($request->all());
        $email->save();
        return new PessoaEmailResource($email);
    }

    public function destroy(Pessoa $pessoa, PessoaEmail $email)
    {
        $this->assertPessoaEmail($pessoa, $email);
        $email->delete();
        return response()->json([], 204);
    }

    private function assertPessoaEmail(Pessoa $pessoa, PessoaEmail $email){
        if($email->pessoa_id != $pessoa->id){
            abort(404);
        }
    }
}