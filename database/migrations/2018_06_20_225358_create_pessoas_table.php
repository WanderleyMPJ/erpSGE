<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150)->nullable();
            $table->string('tipo', 1)->default('j');
            $table->string('fantasia', 120)->nullable();
            $table->boolean('ativo')->default(1);
            $table->integer('user_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->index('nome');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoa_pessoa_grupo');
        Schema::dropIfExists('pessoa_doctos');
        Schema::dropIfExists('pessoas');
    }
}
