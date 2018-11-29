<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pejabat extends Model
{
    //
    protected $table = 'pejabat';
    protected $primaryKey = 'id_pejabat';

    public function jenissurat(){
        return $this->hasMany('app\jenissurat');
    }
}
