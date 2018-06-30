<?php

namespace App\Http\Controllers\Cad;


use App\Http\Requests\Cad\FormapgParcelaRequest;
use App\Http\Resources\Cad\FormapgParcelaCollectionResource;
use App\Http\Resources\Cad\FormapgParcelaResource;
use App\Models\Cad\Formapg;
use App\Models\Cad\FormapgParcela;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormapgFormapgParcelaController extends Controller
{
    public function index(Formapg $formapg)
    {
        return new FormapgParcelaCollectionResource($formapg->FormapgParcela, $formapg);
    }

    public function store(FormapgParcelaRequest $request, Formapg $formapg)
    {
        $input = FormapgParcela::create([
            'formapg_id' => $formapg->id,
            'dias' => $request->dias
        ]);
        return response()->json(new FormapgParcelaResource($input), 201 );    }

    public function show(Formapg $formapg, FormapgParcela $formapgparcela)
    {
        return new FormapgParcelaResource($formapgparcela);
    }

    public function update(Request $request, Formapg $formapg, FormapgParcela $parcela)
    {
      //  return [$formapg, $parcela];
        $this->assertFormapgParcela($formapg, $parcela);
        $parcela->fill($request->all());
        $parcela->save();
        return new FormapgParcelaResource($parcela);
    }

    public function destroy(Formapg $formapg, FormapgParcela $parcela)
    {
        $this->assertFormapgParcela($formapg, $parcela);
        $parcela->delete();
        return response()->json([], 204);
    }

    private function assertFormapgParcela(Formapg $formapg, FormapgParcela $formapgparcela){
        if($formapgparcela->formapg_id != $formapg->id){
            abort(404);
        }
    }
}
