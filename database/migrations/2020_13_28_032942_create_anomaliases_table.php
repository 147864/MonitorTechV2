<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnomaliasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('anomalias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("monitoramento");
            $table->String("veiculo");
            $table->String("tipoAnomalia");
            $table->decimal('avariaBateria');
            $table->decimal('avariAlternador');
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
        Schema::dropIfExists('anomalias');
    }
}
