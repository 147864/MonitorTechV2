<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = "clientes";
    protected $fillable = ['nome', 'cpf', 'rg','cidade_id','endereco','bairro','cep', 'telefone','email'];

    public function cidade(){
        return $this->belongsTo("App\Cidades");
    }
}
