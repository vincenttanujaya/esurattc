<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenissurat;
use App\atributsurat;
use App\memilikiatribut;
use App\permintaansurat;
use App\detailpermintaansurat;
use App\peserta;

class PemohonController extends Controller
{
    public function permohonanawal(){
        $jenissurat = \App\jenissurat::where('tampil',1)->get();
        // dd($jenissurat);
 		return view('/welcome',  compact('jenissurat'));
    }

    public function detailPermohonan(Request $request){
        $tanggalbutuh = $request->tanggalbutuh;
        $nama = $request->nama;
        $nrp = $request->nrp;
        $jenissurat = jenissurat::find($request->id_jenis_surat);
        $atribut = \App\memilikiatribut::where('id_jenis_surat',$request->id_jenis_surat)->with('atributsurat')->get();
        return view('/detail',compact('jenissurat','atribut','tanggalbutuh','nama','nrp'));
    }

    public function tambahPermohonan(Request $request){
        $permohonan = new permintaansurat;
        // dd($request);
        $permohonan->id_jenis_surat = $request->jenissurat;
        $permohonan->tgl_butuh_surat = $request->tglbutuh;
        $permohonan->nama_pemohon = $request->nama_p;
        $permohonan->nrp_pemohon = $request->nrp_p;
        $permohonan->catatan = $request->catatan;
        $permohonan->save();

        $id = $permohonan->id_permintaan_surat;

        $len_isi = count($request->idatr);
        for ($i=0; $i< $len_isi; $i++){
            $isisurat = new detailpermintaansurat;
            $isisurat->id_atribut = $request->idatr[$i];
            $isisurat->rincian = $request->valatr[$i];
            $isisurat->id_permintaan_surat = $id;
            $isisurat->save();        
        }
        if ($request->namapeserta!=null && $request->nrppeserta!=null) {
            $len_peserta = count($request->namapeserta);
            for ($i=0; $i< $len_peserta; $i++){
                $komunal = new peserta;
                $komunal->nama_peserta = $request->namapeserta[$i];
                $komunal->nrp_peserta = $request->nrppeserta[$i];
                $komunal->id_permintaan_surat = $id;
                $komunal->save();        
            }
        }
        

        return redirect('/carisurat');
    }

    public function cariSurat(){
        $permintaansurat = \App\permintaansurat::with('jenissurat')->orderby('created_at', 'DESC')->get();
        $jenissurat = \App\jenissurat::all();
        return view('/pencarian',  compact('permintaansurat','jenissurat'));
    }

}
