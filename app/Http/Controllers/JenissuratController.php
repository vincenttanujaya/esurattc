<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenissurat;
use App\pejabat;
use App\atributsurat;
use App\memilikiatribut;
use Illuminate\Support\Facades\DB;

class JenissuratController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showjenissurat(){
        $pejabat = Pejabat::all();
        $atributsurat = atributsurat::all();
        // dd($pejabat);
        return view('admin/jenissurat',compact('pejabat','atributsurat'));
    }

    public function tambahjenissurat(Request $request)
    {      
        $jenissurat = new jenissurat;
        $jenissurat->jenis_surat = $request->jenissurat;
        $jenissurat->id_pejabat = $request->pejabat;
        $jenissurat->isi_surat = $request->template;
        $jenissurat->save();

        foreach ($request->checklist as $item) {
            $memilikiatribut = new memilikiatribut;
            $memilikiatribut->id_jenis_surat = $jenissurat->id_jenis_surat;
            $memilikiatribut->id_atribut = $item;
            $memilikiatribut->save();
        }
        // $jenissurat->id_jenis_surat
        return redirect('/jenissurat');
    }
}
