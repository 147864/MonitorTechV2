<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            /* ['nome', 'marca','idTipoVeiculo', 'modelo','ano','cor'] */
            $table->bigIncrements('id');
            $table->string('nome', 150);
            $table->string('marca', 90);
            $table->string('tipo', 90);
            $table->string('modelo', 80);
            $table->string('ano', 4);
            $table->string('cor', 10);
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
        Schema::dropIfExists('veiculos');
    }
}
