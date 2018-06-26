<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaDoctosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_doctos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero', 40)->nullable();
            $table->string('orgaoemissor', 60)->nullable();
            $table->date('dataemissao')->nullable();
            $table->date('datavencimento')->nullable();
            $table->integer('pessoa_id')->unsigned();
            $table->integer('pessoa_docto_tipo_id')->unsigned();

            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pessoa_docto_tipo_id')->references('id')->on('pessoa_docto_tipos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_doctos');
    }
}
