<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create(){
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $userAttr = $request->validate([
            'name' => ['min:3', 'required'],
            'email' => ['min:3', 'email', 'required', 'unique:users,email'],
            'password' => ['min:3', Password::min(5)->numbers(), 'confirmed', 'required']
        ]);

        $user = User::create($userAttr);

        Auth::login($user);

        return redirect("/");
    }
}