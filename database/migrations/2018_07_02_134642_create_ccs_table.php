<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcsTable extends Migration
{
    public function up()
    {
        Schema::create('ccs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->boolean('ativo')->default(1);
            $table->integer('cc_tipo_id')->unsigned();
            $table->integer('empresa_id')->unsigned();
            $table->timestamps();

            $table->foreign('cc_tipo_id')->references('id')->on('cc_tipos');
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ccs');
    }
}
