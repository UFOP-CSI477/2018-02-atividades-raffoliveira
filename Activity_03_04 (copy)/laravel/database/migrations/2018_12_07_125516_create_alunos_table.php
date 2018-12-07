<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('rua',80);
            $table->unsignedInteger('numero');
            $table->string('bairro',100);
            $table->unsignedInteger('cidade_id');
            $table->string('cep',8);
            $table->string('mail',50);            
            $table->timestamps();

            $table->foreign('cidade_id')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
