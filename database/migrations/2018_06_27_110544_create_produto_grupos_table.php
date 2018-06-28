<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoGruposTable extends Migration
{
    public function up()
    {
        Schema::create('produto_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->boolean('ativo')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto_grupos');
    }
}
