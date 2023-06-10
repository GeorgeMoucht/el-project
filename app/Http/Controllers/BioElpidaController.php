<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioElpidaController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the view
     */
    public function render()
    {
        return view('elpida-bio');
    }
}