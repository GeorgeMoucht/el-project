<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
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
        return view('contact');
    }

    // Form submission
    public function submitForm(Request $request)
    {
        echo "test";
        exit;
    }
}