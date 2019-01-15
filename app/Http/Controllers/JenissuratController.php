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
        $templatesurat = $request->template;
        $panjang = strlen($atributraw);
        $atributpemohon = [];
        $atributadmin = []; 
        // Atribut yang diisi mahasiswa
        for ($i=0; $i < $panjang; $i++) { 
            if ( $atributraw[$i-1] === "(" && $atributraw[$i-2] === "!" ) {
                $akhir = stripos($atributraw,")",$i) - $i;
                $attr = substr($atributraw,$i,$akhir);
                $tempattr = $attr;
                while(strpos($tempattr,"<")!==false) {
                    $tempattr = str_replace(substr($tempattr,strpos($tempattr,"<"),strpos($tempattr,">")-strpos($tempattr,"<")+1),"",$tempattr);
                    // dd($tempattr);
                }
                $templatesurat = str_replace($attr,$tempattr,$templatesurat);
                $attr = $tempattr;
                array_push($atributpemohon,$attr);
            }
        }
        
        dd($atributpemohon);
        // Atribut Yang Diisi Admin
        for ($i=0; $i < $panjang; $i++) { 
            if ( $atributraw[$i-1] === "{" && $atributraw[$i-2] === "!" ) {
                $akhir = stripos($atributraw,"}",$i) - $i;
                $attr = substr($atributraw,$i,$akhir);
                array_push($atributadmin,$attr);
            }
        }
        
        $replacement ="@page {margin: 1in;}";
        if (strpos($templatesurat,"!komunal")!=false) {
            $replacement.='.komunalnya, .komunalnya th, .komunalnya td {border: 1px solid black;border-collapse: collapse;}';
        }
        $posisi = stripos($templatesurat,"<style>");
        $templatesurat = substr_replace($templatesurat,$replacement,$posisi+7,0);
        

        $jenissurat = new jenissurat;
        $jenissurat->jenis_surat = $request->jenissurat;
        $jenissurat->id_pejabat = $request->pejabat;
        if (strpos($templatesurat,"!komunal")!=false) {
            $jenissurat->komunal = "1";
        }
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
        return redirect('/daftarjenissurat');
    }

    public function ubahjenissurat(Request $request)
    {   
        $jenissurat = jenissurat::find($request->id_jenis_surat);
        $jenissurat->jenis_surat = $request->jenissurat;
        $jenissurat->id_pejabat = $request->pejabat;
        if (strpos($request->template,"!komunal")!=false) {
            $jenissurat->komunal = "1";
        }
        if($request->template !== null){
            $deleteatribut = memilikiatribut::where('id_jenis_surat',$request->id_jenis_surat)->delete();

            $atributraw = $request->template;
            $templatesurat = $request->template;
            $panjang = strlen($atributraw);
            $atributpemohon = [];
            $atributadmin = []; 
            // Atribut yang diisi mahasiswa
            for ($i=0; $i < $panjang; $i++) { 
                if ( $atributraw[$i-1] === "(" && $atributraw[$i-2] === "!" ) {
                    $akhir = stripos($atributraw,")",$i) - $i;
                    $attr = substr($atributraw,$i,$akhir);
                    $tempattr = $attr;
                    while(strpos($tempattr,"<")!==false) {
                        $tempattr = str_replace(substr($tempattr,strpos($tempattr,"<"),strpos($tempattr,">")-strpos($tempattr,"<")+1),"",$tempattr);
                        // dd($tempattr);
                    }
                    $templatesurat = str_replace($attr,$tempattr,$templatesurat);
                    $attr = $tempattr;
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
            
            $replacement ="@page {margin: 1in;}";
            if (strpos($templatesurat,"!komunal")!=false) {
                $replacement.='.komunalnya, .komunalnya th, .komunalnya td {border: 1px solid black;border-collapse: collapse;}';
            }
            $posisi = stripos($templatesurat,"<style>");
            $templatesurat = substr_replace($templatesurat,$replacement,$posisi+7,0);
            
            
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
            $jenissurat->isi_surat = $templatesurat;
        }
        $jenissurat->save();
        // $jenissurat->id_jenis_surat
        return redirect('/daftarjenissurat');
    }
    public function lihatjenissurat(Request $request){
        $templatesurat = $request->template2;
        $replacement ='@page {margin: 1in;}';
        
        if (strpos($templatesurat,"!komunal")!=false) {
            $replacement.='.komunalnya, .komunalnya th, .komunalnya td {border: 1px solid black;border-collapse: collapse;}';
            $replacement2 = '<table class="komunalnya"style="width:100%"><tr><th>Nama</th><th>NRP</th></tr><tr><td>Vincent Marcello Dwi Tanujaya</td><td>05111640000089</td></tr><tr><td>Diana Hudani</td><td>05111640000079</td></tr></table>';
            $templatesurat = str_replace("!komunal",$replacement2,$templatesurat);        
        }

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

    public function editjenissurat($id){
        $jenissurat = jenissurat::where('id_jenis_surat',$id)->with('pejabat')->get();
        $jenissurat = $jenissurat[0];

        $pejabat = Pejabat::all();
        return view('admin/editjenissurat',compact('pejabat','jenissurat'));
    }
}
