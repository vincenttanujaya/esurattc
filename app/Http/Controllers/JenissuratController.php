<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenissurat;
use App\pejabat;

class JenissuratController extends Controller
{
    //
    public function showjenissurat(){
        $pejabat = Pejabat::all();
        // dd($pejabat);
        return view('admin/jenissurat',compact('pejabat'));
    }
}
