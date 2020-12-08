<?php


use Illuminate\Database\Seeder;
use App\TipoVeiculos;

class TipoVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoVeiculos::create(['nome' => 'Colheitadeira', 'bateria' =>'12', 'alternador' =>'13']);
        TipoVeiculos::create(['nome' => 'Caminhão', 'bateria' =>'12', 'alternador' =>'14']);
        TipoVeiculos::create(['nome' => 'Trator', 'bateria' =>'12', 'alternador' =>'13']);
        TipoVeiculos::create(['nome' => 'Pulverizador', 'bateria' =>'12', 'alternador' =>'14']);
    }
}
