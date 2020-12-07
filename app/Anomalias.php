<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anomalias extends Model
{
    protected $table = "anomalias";
    protected $fillable = ["monitoramento_id","veiculo_id", "tipoAnomalia_id", "avariaBateria", "avariAlternador"];

    public function monitoramento(){
        return $this->belongsTo("App\Monitoramentos");
    }

    public function veiculo(){
        return $this->belongsTo("App\Veiculos");
    }

    public function tipoAnomalia(){
        return $this->belongsTo("App\TipoAnomalias");
    }
}
