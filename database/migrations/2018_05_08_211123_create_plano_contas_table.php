<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoContasTable extends Migration
{
    public function up()
    {
        Schema::create('planocontas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nome');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->boolean('ativo')->default(1);
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('planocontas')->onDelete('cascade');
            $table->index('codigo');
            $table->index('nome');
        });
    }

    public function down()
    {
        Schema::dropIfExists('planocontas');
    }
}
