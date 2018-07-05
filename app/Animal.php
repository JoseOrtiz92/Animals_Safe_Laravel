<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table='animales';

    public function Asociacion(){
    	return $this->belongsTo(Asociacion::class, 'id_asociacion');
    }
}
