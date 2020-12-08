<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAnomalias extends Model
{
    protected $table = "tipoAnomalias";
    protected $fillable = ["laudo", "solucao"];

    public function anomalia(){
        return $this->belongsTo("App\Anomalias");
    }
}
