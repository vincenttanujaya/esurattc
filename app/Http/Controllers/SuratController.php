<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\permintaansurat;
use App\jenissurat;

class SuratController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showPermintaan(){
        $status = permintaansurat::with('jenissurat')->get();
        $counter = 1;
        return view('admin/permohonansurat',  compact('status', 'counter'));
    }

    public function showJenis(){
        $jenissurat = jenissurat::all();
        $counter = 1;
        return view('admin/jenissurat',  compact('jenissurat', 'counter'));
    }
}
