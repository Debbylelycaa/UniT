<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Ukm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create() {
        return view('mahasiswa.auth.register');
    }

    public function registUkm() {
        return view('ukm.auth.register');
    }

    public function index() {
        return view('master');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'nim' => 'required|unique:users',
            'jurusan' => 'required',
            'password' => 'required|min:8|same:confirm-password',
            'confirm-password' => 'required|min:8',
            'foto' => 'image',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'jurusan.required' => 'jurusan tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'nim.unique' => 'nim sudah terdaftar',
            'confirm-password.same' => 'Konfirmasi password tidak sesuai',
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/images');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $fotoPath = str_replace('public/', 'storage/', $fotoPath);
        } else {
            $fotoPath = null;
        }
    
        $user = new User([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'nim' => $validated['nim'],
            'jurusan' => $validated['jurusan'],
            'foto' => $fotoPath,
            'password' => bcrypt($validated['password']),
        ]);
    
        $user->save();
        // dd($user);
    
        return redirect('/login-mahasiswa')->with('success', 'Daftar akun berhasil. Silahkan login!');
    }
}
