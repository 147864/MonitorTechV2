<?php


use Illuminate\Database\Seeder;
use App\Cidades;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidades::create(['nome' => 'Espumoso', 'uf' =>'RS']);
        Cidades::create(['nome' => 'Passo Fundo', 'uf' =>'RS']);
        Cidades::create(['nome' => 'Soledade', 'uf' =>'RS']);
        Cidades::create(['nome' => 'Tapera', 'uf' =>'RS']);
        Cidades::create(['nome' => 'Ibiruba', 'uf' =>'RS']);
    }
}
