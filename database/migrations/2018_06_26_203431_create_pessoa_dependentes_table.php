<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaDependentesTable extends Migration
{
    public function up()
    {
        Schema::create('pessoa_dependentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();
            $table->integer('pessoa_dependente_id')->unsigned();
            $table->integer('pessoa_dependente_tipo_id')->unsigned();
            $table->timestamps();

            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pessoa_dependente_id')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pessoa_dependente_tipo_id')->references('id')->on('pessoa_dependente_tipos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoa_dependentes');
    }
}
