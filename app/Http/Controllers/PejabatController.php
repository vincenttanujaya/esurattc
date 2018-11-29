<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pejabat;


class PejabatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPejabat()
 	{
        $pejabat = \App\Pejabat::all();
        $counter = 1;
 		return view('admin/pejabat',  compact('pejabat', 'counter'));
    }    

    public function tambahPejabat(Request $request)
    {
        $pejabat = new Pejabat;
        $pejabat->nama_pejabat = $request->nama;
        $pejabat->nip_pejabat = $request->nip;
        $pejabat->jabatan = $request->jabatan;
        $pejabat->save();
        return redirect('/pejabat');
    }

    public function deletePejabat($id){
        $pejabat = Pejabat::find($id);
        $pejabat->delete();
        return redirect('/pejabat');

    }
}
