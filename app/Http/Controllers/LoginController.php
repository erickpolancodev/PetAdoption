<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('username','password'), $request->remember))
        {
            return back()->with('message','Credential incorrect. Please, try again');
        }

        return redirect()->route('pets');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('pets');
    }
}
