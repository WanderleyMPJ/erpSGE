<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormapgParcelasTable extends Migration
{
    public function up()
    {
        Schema::create('formapg_parcelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dias')->default(30);
            $table->integer('formapg_id')->unsigned();
            $table->timestamps();

            $table->foreign('formapg_id')->references('id')->on('formapgs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formapg_parcelas');
    }
}
