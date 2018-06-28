<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\PessoaDependenteTipoRequest;
use App\Http\Resources\Cad\PessoaDependenteTipoResource;
use App\Models\Cad\PessoaDependenteTipo;
use Illuminate\Http\Request;

class PessoaDependenteTipoController extends Controller
{
    public function index()
    {
        return PessoaDependenteTipoResource::collection(PessoaDependenteTipo::all());
    }

    public function store(PessoaDependenteTipoRequest $request)
    {
        $tipo = PessoaDependenteTipo::create($request->all());
        return new PessoaDependenteTipoResource($tipo);
    }

    public function show(PessoaDependenteTipo $pessoadependentetipo)
    {
        return new PessoaDependenteTipoResource($pessoadependentetipo);
    }

    public function update(PessoaDependenteTipoRequest $request, PessoaDependenteTipo $pessoadependentetipo)
    {
        $pessoadependentetipo->fill($request->all());
        $pessoadependentetipo->save();

        return new PessoaDependenteTipoResource($pessoadependentetipo);
    }

    public function destroy(PessoaDependenteTipo $pessoadependentetipo)
    {
        $pessoadependentetipo->delete();
        return response()->json([], 204);
    }
}
