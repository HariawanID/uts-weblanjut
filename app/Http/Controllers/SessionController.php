<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function index(){
        return view("sesi.index");
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required' => 'email wajib di isi',
            'password.required' => 'password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('blog')->with('success', 'berhasil login');
        } else {
            return redirect('sesi')->withErrors('Username atau Password yang dimasukan tidak valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'berhasil logout');
    }
}
