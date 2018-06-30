<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cad\FormapgRequest;
use App\Http\Resources\Cad\FormapgResource;
use App\Models\Cad\Formapg;

class FormapgController extends Controller
{
    public function index()
    {
        return FormapgResource::collection(Formapg::all());
    }

    public function store(FormapgRequest $request)
    {
        $formapg = Formapg::create($request->all());
        $formapg->refresh(); // devido ao default active para atualizar quando não e passado

        return new FormapgResource($formapg);
    }

    public function show(Formapg $formapg)
    {
        return new FormapgResource($formapg);
    }

    public function update(FormapgRequest $request, Formapg $formapg)
    {
        $formapg->fill($request->all());
        $formapg->save();

        return new FormapgResource($formapg);
    }

    public function destroy(Formapg $formapg)
    {
        $formapg->delete();

        return response()->json([], 204);
    }
}
