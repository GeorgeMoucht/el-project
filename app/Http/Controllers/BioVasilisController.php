<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioVasilisController extends Controller
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
        return view('vasilis-bio');
    }
}