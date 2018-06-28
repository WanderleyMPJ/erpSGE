<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Cad', 'as' => 'cad.' ], function (){

//    **** EMPESA ***
    Route::resource('empresas', 'EmpresaController', ['except' => ['create', 'edit']]);

//    **** PESSOAS ***
    Route::resource('pessoadependentetipos', 'PessoaDependenteTipoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoaemails', 'PessoaEmailController', ['except' => ['create', 'edit']]);
    Route::resource('pessoagrupos', 'PessoaGrupoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoatelefones', 'PessoaTelefoneController', ['except' => ['create', 'edit']]);
    Route::resource('pessoadoctotipos', 'PessoaDoctoTipoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas', 'PessoaController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.grupos', 'PessoaPessoaGrupoController', ['only' => ['index', 'store', 'destroy']]);
    Route::resource('pessoas.doctos', 'PessoaPessoaDoctoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.telefones', 'PessoaPessoaTelefoneController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.emails', 'PessoaPessoaEmailController', ['except' => ['create', 'edit']]);
    Route::resource('pessoas.dependentes', 'PessoaPessoaDependenteController', ['except' => ['create', 'edit']]);
    Route::patch('pessoas/{pessoa}/restore','PessoaController@restore');

//  *** PRODUTOS ****
    Route::resource('produtogrupos', 'ProdutoGrupoController', ['except' => ['create', 'edit']]);
    Route::resource('produtos', 'ProdutoController', ['except' => ['create', 'edit']]);
    Route::resource('produtos.grupos', 'ProdutoProdutoGrupoController', ['only' => ['index', 'store', 'destroy']]);

//    **** MOV ***
    Route::resource('natoperacao', 'MovNatOperacaoController', ['except' => ['create', 'edit']]);
    Route::resource('mov', 'MovController', ['except' => ['create', 'edit']]);

});

