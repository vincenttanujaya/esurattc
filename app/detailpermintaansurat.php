<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailpermintaansurat extends Model
{   
    protected $table = 'detailpermintaansurat';
    protected $primaryKey = 'id_dps';
    protected $fillable = [
        'rincian'
    ];

    public function permintaansurat(){
    	return $this->belongsTo(permintaansurat::class,'id_permintaan_surat','id_permintaan_surat');
    }

    public function atributsurat(){
        return $this->belongsTo(atributsurat::class,'id_atribut','id_atribut');
    }
}
