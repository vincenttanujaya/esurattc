<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function testhalaman()
    {
        $mantap = '<h1> Nama : !1 <!h1>';
        $replacenama = '!1';
        $mantap = str_replace($replacenama, 'Diana', $mantap );
        return view('test', ['mantap'=>$mantap]);
    }
}
