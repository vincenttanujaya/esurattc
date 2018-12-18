<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    protected $table = 'peserta';
    protected $primaryKey = 'id_peserta';
    protected $fillable = [
        'nama_peserta','nrp_peserta'
    ];

    public function permintaansurat(){
    	return $this->belongsTo(permintaansurat::class);
    }
}
