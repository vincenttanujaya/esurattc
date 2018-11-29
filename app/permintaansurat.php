<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permintaansurat extends Model
{
    public function jenissurat(){
    	return $this->belongsTo('app\jenissurat');
    }
    public function peserta(){
    	return $this->hasMany('app\peserta');
    }
    public function detailpermintaansurat(){
    	return $this->hasMany('app\detailpermintaansurat');
    }
}
