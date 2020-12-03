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
        TipoAnomalias::create(['laudo' => 'Bateria descarregada. Alternador OK.', 'solucao' =>'Ficou muito tempo com o veículo parado? Dê uma carga lenta na sua bateria, entre 6 e 12 horas.']);
        TipoAnomalias::create(['laudo' => 'Bateria OK. Alternador não está carregando corretamente.', 'solucao' =>'Seu alterandor não está carregando corretamente, procure um técnico você ficara sem arranque em breve.']);
        TipoAnomalias::create(['laudo' => 'Bateria OK. Alternador carregando muito.', 'solucao' =>'Seu alternador está carregando MUITO. Procure imediatamente um técnico, essa anomalia pode danificar sua bateria.']);
    }
}
