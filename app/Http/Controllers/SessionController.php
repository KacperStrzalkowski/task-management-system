<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('session.login');
    }

    public function store(Request $request)
    {
        $attrUser = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! Auth::attempt($attrUser)){
            throw ValidationException::withMessages([
                'email' => "This credentials doesn't match"
            ]);
        }

        $request->session()->regenerate();

        return redirect("/");
    }

    public function destroy(){
        Auth::logout();

        return redirect("/login");
    }
}