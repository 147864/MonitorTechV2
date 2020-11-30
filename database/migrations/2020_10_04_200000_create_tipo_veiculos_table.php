<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoVeiculos', function (Blueprint $table) {
            /* ['nome','bateria', 'alternador']; */
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->decimal('bateria');
            $table->decimal('alternador');
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
        Schema::dropIfExists('tipoVeiculos');
    }
}
