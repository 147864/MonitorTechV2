<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $table = "veiculos";
    protected $fillable = ['nome', 'marca', 'modelo','ano','cor','tipo_id', 'cliente_id'];

    public function tipoveiculo(){
        return $this->belongsTo("App\TipoVeiculos", "tipo_id");
    }

    public function monitoramento(){
        return $this->hasMany("App\Monitoramentos");
    }

    public function anomalia(){
        return $this->hasMany("App\Anomalias");
    }

    public function cliente(){
        return $this->belongsTo("App\Clientes");
    }


}