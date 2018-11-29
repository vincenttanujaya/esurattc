<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailpermintaansurat extends Model
{
    public function permintaansurat(){
    	return $this->belongsTo('app\permintaansurat');
    }

    public function atributsurat(){
        return $this->belongsTo('app\atributsurat');
    }
}
