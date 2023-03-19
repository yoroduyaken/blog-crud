<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
    

class RegisterController extends Controller
{

    /**
     * 登録画面を表示する。
     */
    public function register()
    {
        return view('register');
    }

    /**
     *新規ユーザーを登録後、メール確認をする。 
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',

       ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]); 

        event(new Registered($user));

        if (!auth()->attempt($request->only('email', 'password'))) 
        {
            return redirect()->back();
        } 

        $request->session()->regenerate();    
        return redirect()->route('home');
    }
}