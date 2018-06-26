<?php

namespace App\Http\Controllers\Cad;

use App\Http\Controllers\Controller;
use App\Http\Resources\Cad\PessoaTelefoneColletionResource;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaTelefone;
use Illuminate\Http\Request;

class PessoaTelefoneController extends Controller
{
    public function index(Pessoa $pessoa)
    {
        //return [$pessoa->pessoatelefones];

    }

   public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(PessoaTelefone $pessoaTelefone)
    {
        //
    }

    public function edit(PessoaTelefone $pessoaTelefone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cad\PessoaTelefone  $pessoaTelefone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PessoaTelefone $pessoaTelefone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cad\PessoaTelefone  $pessoaTelefone
     * @return \Illuminate\Http\Response
     */
    public function destroy(PessoaTelefone $pessoaTelefone)
    {
        //
    }
}
