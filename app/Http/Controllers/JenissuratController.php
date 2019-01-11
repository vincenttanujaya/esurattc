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
        $atributraw = $request->template;
        $panjang = strlen($atributraw);
        $atributpemohon = [];
        $atributadmin = []; 
        // Atribut yang diisi mahasiswa
        for ($i=0; $i < $panjang; $i++) { 
            if ( $atributraw[$i-1] === "(" && $atributraw[$i-2] === "!" ) {
                $akhir = stripos($atributraw,")",$i) - $i;
                $attr = substr($atributraw,$i,$akhir);
                array_push($atributpemohon,$attr);
            }
        }
        // Atribut Yang Diisi Admin
        for ($i=0; $i < $panjang; $i++) { 
            if ( $atributraw[$i-1] === "{" && $atributraw[$i-2] === "!" ) {
                $akhir = stripos($atributraw,"}",$i) - $i;
                $attr = substr($atributraw,$i,$akhir);
                array_push($atributadmin,$attr);
            }
        }
        
        $templatesurat = $request->template;
        $replacement ="@page {margin: 1in;}";
        $posisi = stripos($templatesurat,"<style>");
        $templatesurat = substr_replace($templatesurat,$replacement,$posisi+7,0);
        
        $jenissurat = new jenissurat;
        $jenissurat->jenis_surat = $request->jenissurat;
        $jenissurat->id_pejabat = $request->pejabat;
        $jenissurat->isi_surat = $templatesurat;
        $jenissurat->save();
        
        if($atributadmin!=null){
            foreach($atributadmin as $item){
                $attradmin = new atributsurat;
                $attradmin->slug = $item;
                $attradmin->nama_atribut = str_replace('_',' ',$item);
                $attradmin->pengisi = '1';
                $attradmin->save();

                $memilikiatribut = new memilikiatribut;
                $memilikiatribut->id_jenis_surat = $jenissurat->id_jenis_surat;
                $memilikiatribut->id_atribut = $attradmin->id_atribut;
                $memilikiatribut->save();
            }
        }

        if($atributpemohon!=null){
            foreach($atributpemohon as $item){
                $attrpemohon = new atributsurat;
                $attrpemohon->slug = $item;
                $attrpemohon->nama_atribut = str_replace('_',' ',$item);
                $attrpemohon->pengisi = '0';
                $attrpemohon->save();

                $memilikiatribut = new memilikiatribut;
                $memilikiatribut->id_jenis_surat = $jenissurat->id_jenis_surat;
                $memilikiatribut->id_atribut = $attrpemohon->id_atribut;
                $memilikiatribut->save();
            }
        }

        // $jenissurat->id_jenis_surat
        return redirect('/jenissurat');
    }
    public function lihatjenissurat(Request $request){
        $templatesurat = $request->template2;
        $replacement ="@page {margin: 1in;}";
        $posisi = stripos($templatesurat,"<style>");
        $templatesurat = substr_replace($templatesurat,$replacement,$posisi+7,0);
        
        $pdf = App::make('dompdf.wrapper');
        // // dd($request);
        $pdf->loadHTML($templatesurat);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }

    public function ubahkeaktifan($id){
        $jenissurat = jenissurat::find($id);
        $jenissurat->tampil = $jenissurat->tampil * -1;
        $jenissurat->save();
        return redirect('/daftarjenissurat');
    }

    public function lihatform($id){
        $jenissurat = jenissurat::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($jenissurat->isi_surat);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
