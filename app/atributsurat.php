<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atributsurat extends Model
{
    protected $table = 'atributsurat';
    protected $primaryKey = 'id_atribut';
    protected $fillable = [
        'nama_atribut'
    ];
    
    public function detailpermintaansurats(){
        return $this->hasMany(detailpermintaansurat::class,'id_atribut','id_atribut');
    }
    public function memilikiatribut(){
    	return $this->belongsToMany(jenissurat::class,'memilikiatribut','id_atribut','id_jenis_surat');
    }
}
