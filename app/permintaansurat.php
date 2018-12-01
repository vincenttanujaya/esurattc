<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permintaansurat extends Model
{
    protected $table = 'permintaansurat';
    protected $primaryKey = 'id_permintaan_surat';

    public function jenissurat(){
    	return $this->belongsTo('App\jenissurat','id_jenis_surat');
    }
    public function peserta(){
    	return $this->hasMany('app\peserta');
    }
    public function detailpermintaansurat(){
    	return $this->hasMany('app\detailpermintaansurat');
    }
}
