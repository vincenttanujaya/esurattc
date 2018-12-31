<?php

namespace App\Http\Controllers;

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
        $status = permintaansurat::with('jenissurat')
        ->whereIn('status_surat',  ['DITOLAK', 'SELESAI'])
        ->get();
        $counter = 1;
        return view('admin/riwayat',  compact('status', 'counter'));
    }
}
