<?php

namespace App\Http\Controllers;
use App;

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

    public function daftarjenissurat(){
        $counter = 1;
        $jenissurat = jenissurat::all();
        return view('admin/daftarjenissurat',  compact('counter', 'jenissurat'));
    }

    public function showjenissurat(){
        $jenissurat = jenissurat::with("pejabat")->with("memilikiatribut")->get();
        
        // foreach ($jenissurat as $item) {
        //     dd($item);
        // }
        $pejabat = Pejabat::all();
        $atributsurat = atributsurat::all();
        // dd($pejabat);
        return view('admin/tambahjenissurat',compact('pejabat','atributsurat'));
    }

    public function tambahjenissurat(Request $request)
    {      
        // dd($request);
        $jenissurat = new jenissurat;
        $jenissurat->jenis_surat = $request->jenissurat;
        $jenissurat->id_pejabat = $request->pejabat;
        $jenissurat->isi_surat = $request->template;
        $jenissurat->save();
        if($request->checklist != null){
            foreach ($request->checklist as $item) {
                $memilikiatribut = new memilikiatribut;
                $memilikiatribut->id_jenis_surat = $jenissurat->id_jenis_surat;
                $memilikiatribut->id_atribut = $item;
                $memilikiatribut->save();
            }
        } 
        // $jenissurat->id_jenis_surat
        return redirect('/jenissurat');
    }
    public function lihatjenissurat(Request $request){

        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($request->template2);
        
        return $pdf->stream();
    }
}
