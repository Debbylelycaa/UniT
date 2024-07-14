<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('pages.login');
    }

    public function loginMahasiswa() {
        return view('mahasiswa.auth.login');
    }

    public function loginUkm() {
        return view('ukm.auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard-mhs');
        }

        return back()->with('failed', 'Percobaan masuk gagal. Silahkan coba lagi!');
    }
}
