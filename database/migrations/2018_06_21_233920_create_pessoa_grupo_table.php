<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_pessoa_grupo', function (Blueprint $table) {
            $table->integer('pessoa_id')->unsigned();
            $table->integer('pessoa_grupo_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pessoa_grupo_id')->references('id')->on('pessoa_grupos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoa_pessoa_grupo');
    }
}
