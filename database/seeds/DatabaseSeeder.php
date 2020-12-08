<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CidadeSeeder::class); 
        $this->call(ClienteSeeder::class);
        $this->call(TipoVeiculoSeeder::class);
        $this->call(TipoAnomaliaSeeder::class);
    }
}
