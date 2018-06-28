<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovsTable extends Migration
{
    public function up()
    {
        Schema::create('movs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();
            $table->integer('formapg_id')->unsigned()->nullable();;
            $table->integer('mov_nat_operacao_id')->unsigned();
            $table->date('data');
            $table->string('documento', 40)->nullable();
            $table->string('status', 20)->default('Em Processamento');
            $table->float('valorbruto',15,2)->nullable();
            $table->float('desconto')->nullable();
            $table->float('acrescimo')->nullable();
            $table->timestamps();

            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('formapg_id')->references('id')->on('formapgs');
            $table->foreign('mov_nat_operacao_id')->references('id')->on('mov_nat_operacaos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mov_crs');
        Schema::dropIfExists('movs');
    }
}
