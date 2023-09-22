<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mp3Controller extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render()
    {
        return view('mp3');
    }
}
