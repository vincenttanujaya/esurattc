<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pejabat extends Model
{
    //
    protected $table = 'pejabat';
    protected $primaryKey = 'id_pejabat';
    protected $fillable = [
        'nama_pejabat','nip_pejabat','jabatan'
    ];

    public function jenissurat(){
        return $this->hasMany(jenissurat::class,'id_pejabat','id_pejabat');
    }
}
