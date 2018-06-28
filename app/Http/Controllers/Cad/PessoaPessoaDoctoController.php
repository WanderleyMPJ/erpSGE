<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaDoctoRequest;
use App\Http\Resources\Cad\PessoaDoctoCollectionResource;
use App\Http\Resources\Cad\PessoaDoctoResource;
use App\Models\Cad\Pessoa;
use App\MOdels\Cad\PessoaDocto;

use Illuminate\Http\Request;

class PessoaPessoaDoctoController extends Controller
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

    public function show(Pessoa $pessoa, PessoaDocto $docto)
    {
        $this->assertPessoaDocto($pessoa, $docto);
        return new PessoaDoctoResource($docto);
    }

    public function update(Request $request, Pessoa $pessoa, PessoaDocto $docto)
    {
        $this->assertPessoaDocto($pessoa, $docto);
        $docto->fill($request->all());
        $docto->save();
        return new PessoaDoctoResource($docto);
    }

    public function destroy(Pessoa $pessoa, PessoaDocto $docto)
    {
        $this->assertPessoaDocto($pessoa, $docto);
        $docto->delete();
        return response()->json([], 204);
    }

    private function assertPessoaDocto(Pessoa $pessoa, PessoaDocto $docto){
        if($docto->pessoa_id != $pessoa->id){
            abort(404);
        }
    }
}
