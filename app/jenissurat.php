<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenissurat extends Model
{
    //
    public function pejabat(){
        return $this->belongsTo('app\pejabat');
    }
}
