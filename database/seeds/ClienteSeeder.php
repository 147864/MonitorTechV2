<?php


use Illuminate\Database\Seeder;
use App\Clientes;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clientes::create(['nome' => 'David Vedoia de Moraes',
                            'cpf' =>'01400914086',
                            'rg' =>'1107494989',
                            'endereco' =>'Rua Casemiro de Abreu',
                            'bairro' =>'Brasil',
                            'cep' =>'99400000',
                            'telefone' =>'54 996464361',
                            'email' =>'vedoiadavid@gmail.com',
                            'cidade_id' =>1,

        ]);
    }
}
