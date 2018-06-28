<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovNatOperacaosTable extends Migration
{
    public function up()
    {
        Schema::create('mov_nat_operacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('tipo', 1)->default('S');
            $table->boolean('movfinanceiro')->default(1);
            $table->boolean('movestoque')->default(1);
            $table->boolean('ativo')->default(1);
            $table->timestamps();
        });
    }

   public function down()
    {
        Schema::dropIfExists('mov_nat_operacaos');
    }
}
