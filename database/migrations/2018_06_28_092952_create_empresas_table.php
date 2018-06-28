<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 80);
            $table->integer('pessoa_id')->unsigned();
            $table->boolean('ativo')->default(1);
            $table->timestamps();

            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');

        });
    }

   public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
