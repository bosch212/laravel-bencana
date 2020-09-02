<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
        return view ('auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect ('/layouts');
        }

        return redirect ('/login');
    }

    public function register()
    {
        return view ('auths.register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed' //field_confirmation
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back();
    }
}
