<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\permintaansurat;
use App\jenissurat;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showRiwayat(){
        $status = permintaansurat::with('jenissurat')->with('detailpermintaansurat')->with('atributsurat')
        ->whereIn('status_surat',  ['DITOLAK', 'SELESAI'])
        ->get();
        //dd($status);
        $counter = 1;
        return view('admin/riwayat',  compact('status', 'counter'));
    }

    public function lihatsurat($id){
        $permintaansurat = permintaansurat::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($permintaansurat->suratselesai);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
