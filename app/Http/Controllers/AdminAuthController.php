<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            if($user->admin == 1) {
                return redirect('/home');
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials'
        ]);
    }
}
