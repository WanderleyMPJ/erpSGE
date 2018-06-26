<?php

namespace App\Http\Controllers\Cad;

use App\Http\Requests\Cad\PessoaTelefoneRequest;
use App\Http\Resources\Cad\PessoaTelefoneColletionResource;
use App\Http\Resources\Cad\PessoaTelefoneResource;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaTelefone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoaPessoaTelefoneController extends Controller
{

    public function index(Pessoa $pessoa)
    {
        return new PessoaTelefoneColletionResource($pessoa->pessoatelefones, $pessoa);
    }

    public function store(PessoaTelefoneRequest $request, Pessoa $pessoa)
    {
        $input = PessoaTelefone::create([
            'pessoa_id' => $pessoa->id,
            'numero' => $request->numero,
            'descricao'=> $request->descricao
        ]);
        return response()->json(new PessoaTelefoneResource($input), 201 );
    }

    public function show(Pessoa $pessoa, PessoaTelefone $pessoatelefone)
    {
        $this->assertPessoaTelefone($pessoa, $pessoatelefone);
        return new PessoaTelefoneResource($pessoatelefone);
    }

    public function update(Request $request, Pessoa $pessoa, PessoaTelefone $pessoatelefone)
    {
        $this->assertPessoaTelefone($pessoa, $pessoatelefone);
        $pessoatelefone->fill($request->all());
        $pessoatelefone->save();
        return new PessoaTelefoneResource($pessoatelefone);
    }

    public function destroy(Pessoa $pessoa, PessoaTelefone $pessoatelefone)
    {
        $this->assertPessoaTelefone($pessoa, $pessoatelefone);
        $pessoatelefone->delete();
        return response()->json([], 204);
    }

    private function assertPessoaTelefone(Pessoa $pessoa, PessoaTelefone $pessoatelefone){
        if($pessoatelefone->pessoa_id != $pessoa->id){
            abort(404);
        }
    }
}
