<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoramentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoramentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("veiculo");
            $table->decimal('voltBateria');
            $table->decimal('voltAlternador');
            $table->dateTime('dataHora');
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
        Schema::dropIfExists('monitoramentos');
    }
}
