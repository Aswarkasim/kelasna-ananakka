<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    function index()
    {
        return view('layouts.wrapper', [
            'content'   => 'home.auth.login'
        ]);
    }

    function doLogin(Request $request)
    {
        $credential  = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/kelas');
        }

        return back()->with('loginError', 'Gagal Login');
    }



    function register()
    {
        return view('layouts.wrapper', [
            'content'   => 'home.auth.register'
        ]);
    }

    function doRegister(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|min:3',
            'email'         => 'required|email|min:4|unique:users',
            'password'      => 'required|min:4',
            're_password'   => 'required|same:password'
        ]);

        $data['password']   = Hash::make($data['password']);
        User::create($data);
        return redirect('/login')->with('success', 'Registration success');
    }


    function logout()
    {
        Auth::logout();
        //regenerate token keamanan
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
