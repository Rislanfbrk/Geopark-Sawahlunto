<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class registerController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function prosesRegister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'role' => $request->role,
        ]);

        if ($user) {
            Session::flash('berhasil', 'Berhasil Melakukan Registrasi');
            return redirect()->route('login');
        } else {
            Session::flash('gagal', 'Gagal Melakukan Registrasi');
        }
    }
}
