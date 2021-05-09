<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //-----Constructor
    public function __construct(){
        $this->middleware('auth');
    }

    //--Metodos
    public function Index()
    {
        return view('home/index');
    }
}
