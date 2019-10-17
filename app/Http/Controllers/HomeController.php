<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     *
     */
    public function index(Request $request)
    {
        //$request->session()->put(['olatesterbig'=>'master instructor']);

//        echo $request->session()->get('ola');
       //return  $request->session()->all();
//        return $request->session()->all();
//        return $request->session()->flush()





        return view('home');
    }
}
