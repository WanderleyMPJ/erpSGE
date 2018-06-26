<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaDoctoRequest;
use App\Http\Resources\Cad\PessoaDoctoCollectionResource;
use App\Http\Resources\Cad\PessoaDoctoResource;
use App\Models\Cad\Pessoa;
use App\MOdels\Cad\PessoaDocto;

use Illuminate\Http\Request;

class PessoaDoctoController extends Controller
{
    public function index(Pessoa $pessoa)
    {
        return new PessoaDoctoCollectionResource($pessoa->pessoadocts, $pessoa);
    }

    public function store(PessoaDoctoRequest $request, Pessoa $pessoa)
    {
        $input = PessoaDocto::create([
            'pessoa_id' => $pessoa->id,
            'pessoa_docto_tipo_id' => $request->pessoa_docto_tipo_id,
            'numero' => $request->numero,
            'orgaoemissor'=> $request->orgaoemissor,
            'dataemissao' =>$request->dataemissao,
            'datavencimento'=>$request->datavencimento
        ]);
        return response()->json(new PessoaDoctoResource($input), 201 );
    }

    public function show(Pessoa $pessoa, PessoaDocto $pessoadocto)
    {
        $this->assertPessoaDocto($pessoa, $pessoadocto);
        return new PessoaDoctoResource($pessoadocto);
    }

    public function update(Request $request, Pessoa $pessoa, PessoaDocto $pessoadocto)
    {
        $this->assertPessoaDocto($pessoa, $pessoadocto);
        $pessoadocto->fill($request->all());
        $pessoadocto->save();
        return new PessoaDoctoResource($pessoadocto);
    }

    public function destroy(Pessoa $pessoa, PessoaDocto $pessoadocto)
    {
        $this->assertPessoaDocto($pessoa, $pessoadocto);
        $pessoadocto->delete();
        return response()->json([], 204);
    }

    private function assertPessoaDocto(Pessoa $pessoa, PessoaDocto $pessoadocto){
        if($pessoadocto->pessoa_id != $pessoa->id){
            abort(404);
        }
    }
}
