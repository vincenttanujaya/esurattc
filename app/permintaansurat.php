<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permintaansurat extends Model
{
    protected $table = 'permintaansurat';
    protected $primaryKey = 'id_permintaan_surat';
    protected $fillable = [
        'no_surat','tgl_butuh_surat','tgl_ttd_surat','nama_pemohon','nrp_pemohon','status_surat','catatan'
    ];

    public function jenissurat(){
    	return $this->belongsTo(jenissurat::class,'id_jenis_surat','id_jenis_surat');
    }
    public function peserta(){
    	return $this->hasMany(peserta::class,'id_permintaan_surat','id_permintaan_surat');
    }
    public function detailpermintaansurat(){
    	return $this->hasMany(detailpermintaansurat::class,'id_permintaan_surat','id_permintaan_surat');
    }

    public function atributsurat(){
        return $this->hasManyThrough(atributsurat::class,detailpermintaansurat::class,'id_permintaan_surat','id_atribut','id_permintaan_surat','id_atribut');
    }
}
