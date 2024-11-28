<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'registerEmail' => 'email|min:2|required',
            'registerUsername' => 'required|min:1',
            'registerPassword' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->registerUsername,
            'email' => $request->registerEmail,
            'password' => Hash::make($request->registerPassword)
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
