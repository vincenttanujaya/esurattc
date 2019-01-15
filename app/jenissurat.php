<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenissurat extends Model
{
    protected $table = 'jenissurat';
    protected $primaryKey = 'id_jenis_surat';
    protected $fillable = [
        'jenis_surat','isi_surat'
    ];
    
    public function pejabat(){
        return $this->belongsTo(pejabat::class,'id_pejabat','id_pejabat');

    }

    public function permintaansurat(){
    	return $this->hasMany(permintaansurat::class,'id_jenis_surat','id_jenis_surat');
    }

    public function memilikiatribut(){
    	return $this->belongsToMany(atributsurat::class,'memilikiatribut','id_jenis_surat','id_atribut');
    }
}
