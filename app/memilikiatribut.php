<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memilikiatribut extends Model
{
    public function jenissurat(){
    	return $this->belongsTo('app\jenissurat');
    }

    public function atributsurat(){
        return $this->belongsTo('app\atributsurat');
    }
}
