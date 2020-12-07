<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitoramentos extends Model
{
    protected $table = "monitoramentos";
    protected $fillable = ['veiculo_id', 'voltBateria', 'voltAlternador'];

    public function veiculo(){
        return $this->belongsTo("App\Veiculos");
    }

    public function anomalia(){
        return $this->hasOne("App\Anomalias");
    }

    

}
