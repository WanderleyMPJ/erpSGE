<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Cad', 'as' => 'cad.' ], function (){
    Route::resource('pessoagrupos', 'PessoaGrupoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoatelefones', 'PessoaTelefoneController', ['except' => ['create', 'edit']]);
    Route::resource('pessoadoctotipos', 'PessoaDoctoTipoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas', 'PessoaController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.grupos', 'PessoaPessoaGrupoController', ['only' => ['index', 'store', 'destroy']]);
    Route::resource('pessoas.doctos', 'PessoaDoctoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.telefones', 'PessoaPessoaTelefoneController', ['except' => ['create', 'edit']]);
    Route::patch('pessoas/{pessoa}/restore','PessoaController@restore');
});

