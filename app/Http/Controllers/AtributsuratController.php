<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\atributsurat;

class AtributsuratController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(Request $request ){
        $atributsurat = new atributsurat;
        $atributsurat->nama_atribut = $request->atribut;
        $atributsurat->slug = str_replace(' ', '', $request->atribut);
        $atributsurat->save();
        return redirect('atributsurat');
    }

    public function showatribut(){
        $atributsurat = atributsurat::all();
        return view('admin/atributsurat',compact('atributsurat'));
    }

    public function editAtribut(Request $request, $id){
        $atributsurat = atributsurat::find($id);
        $atributsurat->nama_atribut = $request->nama;
        $atributsurat->save();
        return redirect('/atributsurat');
    }

    public function deleteAtribut($id){
        $atributsurat = atributsurat::find($id);
        $atributsurat->delete();
        return redirect('/atributsurat');
    }
}
