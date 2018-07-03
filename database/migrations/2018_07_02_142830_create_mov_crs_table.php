<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovCrsTable extends Migration
{
    public function up()
    {
        Schema::create('mov_crs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_id')->unsigned();
            $table->integer('formapg_tipo_id')->unsigned();
            $table->integer('parcela');
            $table->date('vencimento');
            $table->date('ultimopg');
            $table->float('valor', 15, 2);
            $table->float('saldo', 15, 2);
            $table->timestamps();

            $table->foreign('mov_id')->references('id')->on('movs')->onDelete('cascade');
            $table->foreign('formapg_tipo_id')->references('id')->on('formapg_tipos');
        });

    }

    public function down()
    {
        Schema::dropIfExists('mov_crs');
    }
}
