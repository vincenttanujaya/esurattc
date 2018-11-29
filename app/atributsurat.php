<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atributsurat extends Model
{
    public function memilikiatribut(){
    	return $this->hasMany('app\memilikiatribut');
    }

    public function detailpermintaansurat(){
        return $this->hasMany('app\detailpermintaansurat');
    }
}
