<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaEnderecosTable extends Migration
{
    public function up()
    {
        Schema::create('pessoa_enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();

            $table->string('descricao', 80)->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('logradouro', 120)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('complemento', 120)->nullable();
            $table->string('referencia', 160)->nullable();
            $table->timestamps();

            $table->index('descricao');
            $table->index('cep');

            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('pessoa_enderecos');
    }
}
