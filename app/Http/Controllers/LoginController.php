<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * ログイン画面を表示する。
     */
    public function login()
    {
        return view('login');
    }

    /**
     * 登録したユーザーをログインさせる。
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
       ]);

        if (!auth()->attempt($request->only('email', 'password'))) 
        {
            return redirect()->back();
        } 

        $request->session()->regenerate();    
        return redirect()->route('home');
    }
    
    /**
     * 登録したユーザーをログアウトさせる。
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
