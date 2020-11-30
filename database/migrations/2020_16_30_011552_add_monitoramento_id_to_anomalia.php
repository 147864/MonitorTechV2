<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMonitoramentoIdToAnomalia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anomalias', function (Blueprint $table) {
            $table->bigInteger('monitoramento_id')->unsigned()->nullable();
            $table->foreign('monitoramento_id')->references('id')->on('monitoramentos');
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
