<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoProdutoGruposTable extends Migration
{
    public function up()
    {
        Schema::create('produto_produto_grupo', function (Blueprint $table) {
            $table->integer('produto_id')->unsigned();
            $table->integer('produto_grupo_id')->unsigned();

            $table->foreign('produto_id')->references('id')
                ->on('produtos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('produto_grupo_id')->references('id')
                ->on('produto_grupos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto_produto_grupo');
    }
}
