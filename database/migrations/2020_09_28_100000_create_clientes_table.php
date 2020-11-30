<?php

use App\Cidades;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            /*['nome', 'cpf', 'rg','idCidade','endereco','bairro','cep', 'telefone','email']; */
            $table->bigIncrements('id');
            $table->string('nome', 150);
            $table->string('cpf', 11);
            $table->string('rg', 11);
            $table->string('cidade', 10);
            $table->string('endereco', 100);
            $table->string('bairro', 50);
            $table->string('cep', 10);
            $table->string('telefone', 15);
            $table->string('email', 100);
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
        Schema::dropIfExists('clientes');
    }
}
