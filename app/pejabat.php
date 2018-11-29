<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pejabat extends Model
{
    //
    public function jenissurat(){
        return $this->hasMany('app\jenissurat');
    }
}
