<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class AuthControler extends Controller
{

    public function login()
    {
        return view('FrontEnd.auth_masuk');
    }
    public function register()
    {
        return view('FrontEnd.auth_daftar');
    }

    public function login_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('auth.login')->withErrors($validator)->withInput();
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('content.index')->with('success', 'Login Berhasil');
        } else {
            return redirect()->route('auth.login')->with('error', 'Email atau Password salah');
        }
    }

    public function register_post(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'usia' => $request->usia,
        ]);
        return redirect()->route('auth.login')->with('success', 'Pendaftaran Berhasil');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('auth.login')->with('success', 'Logout Berhasil');
    }
}
