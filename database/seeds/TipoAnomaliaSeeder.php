<?php

use Illuminate\Database\Seeder;
use App\TipoAnomalias;

class TipoAnomaliaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAnomalias::create(['laudo' => 'Bateria OK. Alternador OK.', 'solucao' =>'Está tudo bem :)']);
        TipoAnomalias::create(['laudo' => 'Bateria OK. Alternador não está carregando corretamente.', 'solucao' =>'Seu alterandor não está carregando corretamente, procure um técnico ou você ficará sem arranque em breve.']);
        TipoAnomalias::create(['laudo' => 'Bateria OK. Alternador carregando MUITO !!.', 'solucao' =>'Seu alternador está carregando MUITO. Procure imediatamente um técnico, essa anomalia pode danificar sua bateria.']);
        TipoAnomalias::create(['laudo' => 'Bateria fraca. Alternador OK.', 'solucao' =>'Sua bateria está sem forças. Seu alternador carrega bem, porém ela não tem forças para girar o motor. Considere a substituição.']);
        TipoAnomalias::create(['laudo' => 'Bateria fraca. Alternador não está carregando corretamente', 'solucao' =>'Falha geral no sistema elétrico. Você está em arranque, procure o seu técnico.']);
    }
}
