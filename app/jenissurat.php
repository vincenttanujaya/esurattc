<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenissurat extends Model
{
    protected $table = 'jenissurat';
    protected $primaryKey = 'id_jenis_surat';
    
    public function pejabat(){
        return $this->belongsTo('app\pejabat');

    }

    public function permintaansurat(){
    	return $this->hasMany('app\permintaansurat');
    }

    public function memilikiatribut(){
    	return $this->hasMany('app\memilikiatribut');
    }
}
