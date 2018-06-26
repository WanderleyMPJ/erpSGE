<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaDoctoTiposTable extends Migration
{
    public function up()
    {
        Schema::create('pessoa_docto_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoa_docto_tipos');
    }
}
