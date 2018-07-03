<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcBancosTable extends Migration
{
    public function up()
    {
        Schema::create('cc_bancos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero')->nullable();
            $table->integer('agencia')->nullable();
            $table->integer('conta')->nullable();

            $table->integer('cc_id')->unsigned();
            $table->timestamps();

            $table->foreign('cc_id')->references('id')->on('ccs')->onDelete('cascade');
        });
    }

   public function down()
    {
        Schema::dropIfExists('cc_bancos');
    }
}
