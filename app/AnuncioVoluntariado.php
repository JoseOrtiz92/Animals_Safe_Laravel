<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Asociacion;

class AnuncioVoluntariado extends Model
{
    public function Asociacion(){
    	return $this->belongsTo(Asociacion::class, 'id_asociacion');
    }
}
