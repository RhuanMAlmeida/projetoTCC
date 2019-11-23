<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->string('cpf');
            $table->string('telefone');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('atividades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('tipo');
            $table->string('assunto');
            $table->string('data_conclusao');
            $table->string('detalhe');
            $table->string('status');
            $table->bigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
        Schema::drop('atividades');
    }
}
