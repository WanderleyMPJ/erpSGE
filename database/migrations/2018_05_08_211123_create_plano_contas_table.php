<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoContasTable extends Migration
{
    public function up()
    {
        Schema::create('plano_contas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codconta');
            $table->string('nome');
            $table->integer('parent_id')->unsigned();
            $table->boolean('ativo')->default(1);
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('plano_contas');
            $table->index('nome');
        });
    }

    public function down()
    {
        Schema::dropIfExists('plano_contas');
    }
}
