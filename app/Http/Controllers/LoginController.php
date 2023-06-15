<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
 
            return redirect('/mnarje/index');
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

        $photos = Photo::all();

        return view('home')->with([
            'photo' => $photos->random()
        ]);
    }
}
