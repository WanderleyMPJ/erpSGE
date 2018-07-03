<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcBancoCobrancasTable extends Migration
{

    public function up()
    {
        Schema::create('cc_banco_cobrancas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('convenio');
            $table->string('carteira');
            $table->integer('cc_banco_id')->unsigned();
            $table->timestamps();

            $table->foreign('cc_banco_id')->references('id')->on('cc_bancos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cc_banco_cobrancas');
    }
}
