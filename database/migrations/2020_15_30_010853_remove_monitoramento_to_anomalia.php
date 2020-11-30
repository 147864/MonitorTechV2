<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveMonitoramentoToAnomalia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anomalias', function (Blueprint $table) {
            $table->dropColumn('monitoramento');
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
            $table->string('monitoramento', 50);
        });
    }
}
