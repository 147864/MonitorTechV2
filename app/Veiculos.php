<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $table = "veiculos";
    protected $fillable = ['nome', 'marca', 'modelo','ano','cor','tipo_id'];

    public function tipoVeiculo(){
        return $this->belongsTo("App\TipoVeiculos");
    }

    public function monitoramento(){
        return $this->hasMany("App\Monitoramentos");
    }

    public function anomalia(){
        return $this->hasMany("App\Anomalias");
    }


}