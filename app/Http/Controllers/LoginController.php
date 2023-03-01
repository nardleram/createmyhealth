<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login()
    {
        return view('photoze.jumpin');
    }

    public function authenticate(Request $request) : RedirectResponse
    {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/photoze/index');
        }
        
        return back()->withErrors([
            'email' => 'The details you entered do not match our records.',
        ])->onlyInput('email');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('home');
    }
}
