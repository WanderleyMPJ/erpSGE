<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaDoctoTipoRequest;
use App\Http\Resources\Cad\PessoaDoctoTipoResource;
use App\Models\Cad\PessoaDoctoTipo;
use Illuminate\Http\Request;

class PessoaDoctoTipoController extends Controller
{

    public function index()
    {
        return PessoaDoctoTipoResource::collection(PessoaDoctoTipo::all());
    }

    public function store(PessoaDoctoTipoRequest $request)
    {
        $docto = PessoaDoctoTipo::create($request->all());
        return new PessoaDoctoTipoResource($docto);
    }

    public function show(PessoaDoctoTipo $pessoadoctotipo)
    {
        return new PessoaDoctoTipoResource($pessoadoctotipo);
    }

    public function update(PessoaDoctoTipoRequest $request, PessoaDoctoTipo $pessoadoctotipo)
    {
        $pessoadoctotipo->fill($request->all());
        $pessoadoctotipo->save();

        return new PessoaDoctoTipoResource($pessoadoctotipo);
    }

      public function destroy(PessoaDoctoTipo $pessoadoctotipo)
    {
        $pessoadoctotipo->delete();
        return response()->json([], 204);
    }
}
