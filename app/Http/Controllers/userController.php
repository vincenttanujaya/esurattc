<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\permintaansurat;

class userController extends Controller
{
    public function showStatus(){
        $status = permintaansurat::with('jenissurat')->get();
        $counter = 1;
        return view('admin/statussurat',  compact('status', 'counter'));
    }
}
