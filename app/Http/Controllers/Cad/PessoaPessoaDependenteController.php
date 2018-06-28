<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaDependentesRequest;
use App\Http\Resources\Cad\PessoaDependentesCollectionResource;
use App\Http\Resources\Cad\PessoaDependentesResource;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaDependente;
use Illuminate\Http\Request;

class PessoaPessoaDependenteController extends Controller
{
    public function index(Pessoa $pessoa)
    {

        return new PessoaDependentesCollectionResource($pessoa->pessoadependentes, $pessoa);
    }

    public function store(PessoaDependentesRequest $request, Pessoa $pessoa)
    {
        $this->assertMesmoTitular($pessoa->id, $request->pessoa_dependente_id);
        $input = PessoaDependente::create([
            'pessoa_id' => $pessoa->id,
            'pessoa_dependente_tipo_id' => $request->pessoa_dependente_tipo_id,
            'pessoa_dependente_id' => $request->pessoa_dependente_id
        ]);
        return response()->json(new PessoaDependentesResource($input), 201 );
    }

    public function show(Pessoa $pessoa, PessoaDependente $dependente)
    {
        $this->assertPessoaDependente($pessoa, $dependente);
        return new PessoaDependentesResource($dependente);
    }

    public function update(PessoaDependentesRequest $request, Pessoa $pessoa, PessoaDependente $dependente)
    {
        $this->assertMesmoTitular($pessoa->id, $request->pessoa_dependente_id);
        $this->assertPessoaDependente($pessoa, $dependente);
        $dependente->fill($request->all());
        $dependente->save();
        return new PessoaDependentesResource($dependente);
    }

    public function destroy(Pessoa $pessoa, PessoaDependente $dependente)
    {
        $this->assertPessoaDependente($pessoa, $dependente);
        $dependente->delete();
        return response()->json([], 204);
    }

    private function assertPessoaDependente(Pessoa $pessoa, PessoaDependente $dependente)
    {
        if ($dependente->pessoa_id != $pessoa->id) {
            abort(404);
        }
    }

    private function AssertMesmoTitular ($pessoaid, $dependenteid)
    {
        if($pessoaid == $dependenteid){
            abort(404, 'Dependente não pode ser o mesmo titular');
        }

    }
}
