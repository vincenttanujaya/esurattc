<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    public function permintaansurat(){
    	return $this->belongsTo('app\permintaansurat');
    }
}
