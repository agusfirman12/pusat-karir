<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/profile');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }


    public function registration()
    {
        return view('user.registration');
    }

    public function processRegistration(Request $request)
    {
        $request->validate([
            "nisn"      => "required|min:4",
            "name"      => "required",
            "email"     => "required|unique:users|email:dns",
            "password"  => "required|min:6",
            "konfirmasi_password" => "required|same:password",
        ]);

        $data = new User();
        $data->nisn = $request->nisn;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->type = 0;
        $data->save();


        return redirect()->route('login')->with('success', 'Data Berhasil Ditambahkan');
    }
}
