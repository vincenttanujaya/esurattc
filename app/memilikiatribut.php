<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memilikiatribut extends Model
{
    protected $table = 'memilikiatribut';
    
    public function jenissurat(){
    	return $this->belongsTo('App\jenissurat','id_jenis_surat');
    }

    public function atributsurat(){
        return $this->belongsTo('App\atributsurat', 'id_atribut');
    }
}
