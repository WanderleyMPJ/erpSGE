<?php

namespace App\Http\Controllers\Cad;





use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaRequest;
use App\Http\Resources\Cad\PessoaResource;
use App\Models\Cad\Pessoa;
use App\Common\funcoes;
use Illuminate\Http\Request;

class PessoaController extends Controller
{

    use funcoes;

    public function index(Request $request)
    {
        $query = Pessoa::query();
        $query = $this->onlyTrashedIfRequested($request, $query);
        $pessoas = $query->paginate(15);
        return PessoaResource::collection($pessoas);
    }

    public function store(PessoaRequest $request)
    {
        $Pessoa = Pessoa::create($request->all());
        $Pessoa->refresh();
        return new PessoaResource($Pessoa);
    }

    public function show(Pessoa $Pessoa)
    {

        return new PessoaResource($Pessoa);
    }

    public function update(PessoaRequest $request, Pessoa $Pessoa)
    {
        $Pessoa->fill($request->all());
        $Pessoa->save();
        return new PessoaResource($Pessoa);
    }

    public function destroy(Pessoa $Pessoa)
    {
        $Pessoa->delete();
        return response([], 204);
    }

    public function restore(Pessoa $pessoa){
        $pessoa->restore();
        return response()->json([], 204);
    }
}
