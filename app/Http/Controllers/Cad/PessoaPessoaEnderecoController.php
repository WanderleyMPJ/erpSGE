<?php

namespace App\Http\Controllers\Cad;

use App\Http\Requests\Cad\PessoaEnderecoRequest;
use App\Http\Resources\Cad\PessoaEnderecoCollectionResource;
use App\Http\Resources\Cad\PessoaEnderecoResource;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaEndereco;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoaPessoaEnderecoController extends Controller
{
    public function index(Pessoa $pessoa)
    {
        return new PessoaEnderecoCollectionResource($pessoa->Pessoaenderecos, $pessoa);
    }

    public function store(PessoaEnderecoRequest $request, Pessoa $pessoa)
    {
        $input = PessoaEndereco::create([
            'pessoa_id' => $pessoa->id,
            'numero' => $request->numero,
            'descricao'=> $request->descricao
        ]);
        return response()->json(new PessoaEnderecoResource($input), 201 );
    }

    public function show(Pessoa $pessoa, PessoaEndereco $endereco)
    {
        return new PessoaEnderecoResource($endereco);
    }

    public function update(Request $request, Pessoa $pessoa, PessoaEndereco $endereco)
    {
        $this->assertPessoaEndereco($pessoa, $endereco);
        $endereco->fill($request->all());
        $endereco->save();
        return new PessoaEnderecoResource($endereco);
    }

    public function destroy(Pessoa $pessoa, PessoaEndereco $endereco)
    {
        $this->assertPessoaEndereco($pessoa, $endereco);
        $endereco->delete();
        return response()->json([], 204);
    }

    private function assertPessoaEndereco(Pessoa $pessoa, PessoaEndereco $endereco){
        if($endereco->pessoa_id != $pessoa->id){
            abort(404);
        }
    }
}
