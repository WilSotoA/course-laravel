<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginValidate(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('sucess', 'Login successful');
        }
        return back()->with('error', 'Email or password incorrect');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
