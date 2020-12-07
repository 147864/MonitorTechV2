<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVeiculos extends Model
{
    protected $table = "tipoVeiculos";
    protected $fillable = ['nome','bateria', 'alternador'];

    public function veiculo(){
        return $this->belongsTo("App\Veiculos");
    }
}
