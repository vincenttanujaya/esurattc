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
    public function index2($id){
        $jenissurat = \App\jenissurat::where('tampil',1)->get();
        $jenissuratid = jenissurat::find($id);
        $atribut = \App\memilikiatribut::where('id_jenis_surat',$id)->with('atributsurat')->get();
 		return view('user/pengajuan',  compact('atribut','id', 'jenissurat','jenissuratid'));
    }

    public function tambahPermohonan(Request $request){
        $permohonan = new permintaansurat;
        $permohonan->id_jenis_surat = $request->jenissurat;
        $permohonan->tgl_butuh_surat = $request->tglbutuh;
        $permohonan->nama_pemohon = $request->nama_p;
        $permohonan->nrp_pemohon = $request->nrp_p;
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
        $permintaansurat = \App\permintaansurat::orderby('created_at', 'DESC')->get();
        $jenissurat = \App\jenissurat::all();
        return view('user/pencariansurat',  compact('permintaansurat','jenissurat'));
    }

}
