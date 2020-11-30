<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anomalias extends Model
{
    protected $table = "anomalias";
    protected $fillable = ["monitoramento_id", "tipoAnomalia_id", "veiculo_id", "avariaBateria", "avariaAlternador"];

    public function monitoramento(){
        return $this->hasOne("App\Monitoramentos");
    }

    public function veiculo(){
        return $this->belongsTo("App\Veiculos");
    }

    public function tipoAnomalia(){
        return $this->hasOne("App\TipoAnomalias");
    }
}
