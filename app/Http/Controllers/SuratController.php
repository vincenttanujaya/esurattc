<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\permintaansurat;
use App\jenissurat;
use App\detailpermintaansurat;
use App\atributsurat;
use App\pejabat;

class SuratController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showPermintaan(){
        $status = permintaansurat::with('jenissurat')
        ->where('status_surat', '!=', 'SELESAI')
        ->where('status_surat', '!=', 'DITOLAK')
        ->get();
        $counter = 1;
        return view('admin/permohonansurat',  compact('status', 'counter'));
    }

    public function showJenis(){
        $jenissurat = jenissurat::all();
        $counter = 1;
        return view('admin/jenissurat',  compact('jenissurat', 'counter'));
    }
    public function prosessurat($id){
        $detail = permintaansurat::where('id_permintaan_surat',$id)->with('jenissurat')->with('detailpermintaansurat')->with('atributsurat')->get();
        
        $detailsurat = $detail[0];
        $count = $detailsurat->atributsurat->count();
        //dd($detailsurat);
        return view('admin/prosessurat',compact('detailsurat','count'));
    }

    public function cetaksurat(Request $request){
        $count = count($request->isi);
        // dd($request);
        $permintaan = permintaansurat::find($request->id_permintaan);
        // dd($permintaan);
        $permintaan->no_surat = $request->nomorsurat;
        $permintaan->tgl_ttd_surat = $request->tglttd;
        $permintaan->save();
        
        for ($i=0; $i < $count; $i++) { 
            $data = detailpermintaansurat::find($request->idattr[$i]);
            $data->rincian = $request->isi[$i];
            $data->save();
        }

        $detail = permintaansurat::where('id_permintaan_surat',$request->id_permintaan)->with('jenissurat')->with('detailpermintaansurat')->with('atributsurat')->get();
        // dd($detail);
        $detailsurat = $detail[0];
        $isisurat = $detailsurat->jenissurat->isi_surat;
        $idjenissurat = $detailsurat->id_jenis_surat;
        $jenissuratnya = jenissurat::find($idjenissurat);
        $idpejabat = $jenissuratnya->id_pejabat;
        $pejabat = pejabat::find($idpejabat);
        // dd($request);
        
        for ($i=0; $i < $count; $i++) { 
            $isisurat = str_replace($request->slugg[$i],$request->isi[$i],$isisurat);
        }
        $isisurat = str_replace('!namamahasiswa',$detailsurat->nama_pemohon,$isisurat);
        $isisurat = str_replace('!nrpmahasiswa',$detailsurat->nrp_pemohon,$isisurat);
        $isisurat = str_replace('!nomorsurat',$detailsurat->no_surat,$isisurat);
        $isisurat = str_replace('!tanggalttd',$detailsurat->tgl_ttd_surat,$isisurat);
        $isisurat = str_replace('!Jabatan',$pejabat->jabatan,$isisurat);
        $isisurat = str_replace('!Pejabat',$pejabat->nama_pejabat,$isisurat);
        $isisurat = str_replace('!NIP',$pejabat->nip_pejabat,$isisurat);
        


        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($isisurat);
        return $pdf->stream();
    }

    public function updateStatus(Request $request, $id){
        $status = permintaansurat::find($id);
        $status->status_surat = $request->status;
        $status->save();
        return redirect()->route('prosessurat', [$id]);
    }

    public function tolakSurat(Request $request, $id){
        $status = permintaansurat::find($id);
        $status->status_surat = 'DITOLAK';
        $status->save();
        return redirect('/surat');
    }
}
