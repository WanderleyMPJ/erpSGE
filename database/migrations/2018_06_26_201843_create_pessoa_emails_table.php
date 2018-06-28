<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaEmailsTable extends Migration
{
    public function up()
    {
        Schema::create('pessoa_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 120)->nullable();
            $table->string('email', 180);
            $table->integer('pessoa_id')->unsigned();
            $table->timestamps();

            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoa_emails');
    }
}
