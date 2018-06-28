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
            $table->integer('mov_nat_operacao_id')->unsigned();
            $table->date('data');
            $table->string('documento', 40);
            $table->float('valorbruto');
            $table->float('desconto');
            $table->float('acrescimo');
            $table->timestamps();

            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('mov_nat_operacao_id')->references('id')->on('mov_nat_operacaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movs');
    }
}
