<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        // Simpan nama ke dalam session
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        
        // Redirect ke halaman welcome dengan data nama di session
        return redirect('/welcome')->with(['first_name' => $first_name, 'last_name' => $last_name]);
    }

    public function showWelcomePage()
    {
        $firstName = session('first_name');
        $lastName = session('last_name');
        
        return view('welcome', ['first_name' => $firstName, 'last_name' => $lastName]);
    }
}