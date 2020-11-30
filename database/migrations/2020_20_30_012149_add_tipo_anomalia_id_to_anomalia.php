<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoAnomaliaIdToAnomalia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anomalias', function (Blueprint $table) {
            $table->bigInteger('tipoAnomalia_id')->unsigned()->nullable();
            $table->foreign('tipoAnomalia_id')->references('id')->on('tipoAnomalias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anomalias', function (Blueprint $table) {
            //
        });
    }
}
