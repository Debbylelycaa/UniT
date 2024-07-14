<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UkmController extends Controller
{
    public function registUkm()
    {
        return view('ukm.auth.register');
    }

    public function loginUkm()
    {
        return view('ukm.auth.login');
    }

    public function dashboardUkm()
    {
        $ukm = Auth::guard('ukm')->user();

        if (!$ukm) {
            return redirect('/login-ukm');
        }

        $penguruses = $ukm->penguruses;
        $events = $ukm->events;

        return view('ukm.dashboard', [
            'data' => $ukm,
            'penguruses' => $penguruses,
            'events' => $events
        ]);
    }

    public function editUkm()
    {
        $ukm = Auth::guard('ukm')->user();

        if (!$ukm) {
            return redirect('/login-ukm');
        }

        $penguruses = $ukm->penguruses;

        return view('ukm.edit', [
            'data' => $ukm,
            'penguruses' => $penguruses
        ]);
    }

    public function updateUkm(Request $request)
    {

        $ukm = Auth::guard('ukm')->user();

        // Mengambil data dari form yang dikirimkan
        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'link_grup' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi untuk file gambar
        ]);

        // Memperbarui data UKM sesuai data yang dikirimkan
        $update['deskripsi'] = $validatedData['deskripsi'];
        $update['link_grup'] = $validatedData['link_grup'];

        // Memeriksa apakah ada file foto yang di-upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $logoPath = str_replace('public/', 'storage/', $logoPath);
            $update['logo'] = $logoPath;
        }

        // Menyimpan perubahan pada model UKM
        $ukm->update($update);

        return redirect('/dashboard-ukm')->with('message', 'Data berhasil diperbarui!');
    }

    public function viewDaftarPendaftar()
    {
        $ukm = auth()->guard('ukm')->user();

        // Ambil daftar mahasiswa yang mendaftar pada UKM yang sedang login
        $mahasiswas = $ukm->users;

        return view('ukm.daftar-pendaftar', [
            'ukm' => $ukm,
            'mahasiswas' => $mahasiswas
        ]);
    }

    public function createUkm(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|email|unique:ukms',
                'password' => 'required|min:8|same:confirm-password',
                'confirm-password' => 'required|min:8',
                'deskripsi' => 'required',
                'visi' => 'required',
                'misi' => 'required',
                'logo' => 'required|image',
                'link_grup' => 'required',
                'instagram' => 'required',
                'telepon' => 'required',
                'pengesahan' => 'required|image',
                'ava_pengurus.*' => 'image',
                'nama_pengurus.*' => 'required',
                'jabatan_pengurus.*' => 'required',
                'jurusan_pengurus.*' => 'required',

            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar',
                'password.same' => 'Konfirmasi password tidak sesuai',
                'deskripsi.required' => 'deskripsi tidak boleh kosong',
                'visi.required' => 'visi tidak boleh kosong',
                'misi.required' => 'misi tidak boleh kosong',
                'logo.required' => 'logo tidak boleh kosong',
                'link_grup.required' => 'Link grup tidak boleh kosong',
                'instagram.required' => 'Instagram tidak boleh kosong',
                'telepon.required' => 'Telepon tidak boleh kosong',
                'pengesahan.required' => 'pengesahan tidak boleh kosong',
                'ava_pengurus.required' => 'Avatar tidak boleh kosong',
                'nama_pengurus.required' => 'Nama tidak boleh kosong',
                'jabatan_pengurus.required' => 'Jabatan tidak boleh kosong',
                'jurusan_pengurus.required' => 'Jurusan tidak boleh kosong',
            ]
        );

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $logoPath = str_replace('public/', 'storage/', $logoPath);
        } else {
            $logoPath = null;
        }

        if ($request->hasFile('pengesahan')) {
            $pengesahanPath = $request->file('pengesahan')->store('public/pengesahans');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $pengesahanPath = str_replace('public/', 'storage/', $pengesahanPath);
        } else {
            $pengesahanPath = null;
        }

        $ukm = new Ukm([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'deskripsi' => $validated['deskripsi'],
            'visi' => $validated['visi'],
            'misi' => $validated['misi'],
            'logo' => $logoPath,
            'link_grup' => $validated['link_grup'],
            'instagram' => $validated['instagram'],
            'telepon' => $validated['telepon'],
            'pengesahan' => $pengesahanPath
        ]);

        $ukm->save();

        foreach ($request->nama_pengurus_utama as $key => $namaPengurus) {
            $pengurus = new Pengurus();
            $pengurus->nama = $namaPengurus;
            $pengurus->jabatan = $request->jabatan_pengurus_utama[$key];
            $pengurus->jurusan = $request->jurusan_pengurus_utama[$key];

            if ($request->hasFile('ava_pengurus_utama') && isset($request->ava_pengurus_utama[$key])) {
                $avatarPath = $request->file('ava_pengurus_utama')[$key]->store('public/avatars');
                $avatarPath = str_replace('public/', 'storage/', $avatarPath);
                $pengurus->avatar = $avatarPath;
            } else {
                $pengurus->avatar = null;
            }

            $ukm->penguruses()->save($pengurus);
        }

        $ukm->save();
        // dd($request->all());

        return redirect('/login-ukm')->with('success', 'Daftar akun berhasil. Silahkan login!');
    }

    public function authUkm(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if (Auth::guard('ukm')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard-ukm');
        }

        return back()->with('failed', 'Percobaan masuk gagal. Silahkan coba lagi!');
    }

    public function signout(Request $request)
    {
        Auth::guard('ukm')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function createPengurus(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|email|unique:ukms',
                'password' => 'required|min:8|same:confirm-password',
                'confirm-password' => 'required|min:8',
                'deskripsi' => 'required',
                'visi' => 'required',
                'misi' => 'required',
                'logo' => 'image',
                'link_grup' => 'required',
                'pengesahan' => 'image',
                'ava_pengurus.*' => 'image',
                'nama_pengurus.*' => 'required',
                'jabatan_pengurus.*' => 'required',
                'jurusan_pengurus.*' => 'required',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar',
                'password.same' => 'Konfirmasi password tidak sesuai',
                'deskripsi.required' => 'deskripsi tidak boleh kosong',
                'visi.required' => 'visi tidak boleh kosong',
                'misi.required' => 'misi tidak boleh kosong',
                'logo.required' => 'logo tidak boleh kosong',
                'link_grup.required' => 'Link grup tidak boleh kosong',
                'pengesahan.required' => 'pengesahan tidak boleh kosong',
                'ava_pengurus.required' => 'Avatar tidak boleh kosong',
                'nama_pengurus.required' => 'Nama tidak boleh kosong',
                'jabatan_pengurus.required' => 'Jabatan tidak boleh kosong',
                'jurusan_pengurus.required' => 'Jurusan tidak boleh kosong',
            ]
        );

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $logoPath = str_replace('public/', 'storage/', $logoPath);
        } else {
            $logoPath = null;
        }

        if ($request->hasFile('pengesahan')) {
            $pengesahanPath = $request->file('pengesahan')->store('public/pengesahans');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $pengesahanPath = str_replace('public/', 'storage/', $pengesahanPath);
        } else {
            $pengesahanPath = null;
        }

        $ukm = new Ukm([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'deskripsi' => $validated['deskripsi'],
            'visi' => $validated['visi'],
            'misi' => $validated['misi'],
            'logo' => $logoPath,
            'link_grup' => $validated['link_grup'],
            'pengesahan' => $pengesahanPath
        ]);

        foreach ($request->nama_pengurus as $key => $namaPengurus) {
            $pengurus = new Pengurus();
            $pengurus->nama = $namaPengurus;
            $pengurus->jabatan = $request->jabatan_pengurus[$key];
            $pengurus->jurusan = $request->jurusan_pengurus[$key];

            if ($request->hasFile('ava_pengurus') && isset($request->ava_pengurus[$key])) {
                $avatarPath = $request->file('ava_pengurus')[$key]->store('public/avatars');
                $avatarPath = str_replace('public/', 'storage/', $avatarPath);
                $pengurus->avatar = $avatarPath;
            }

            $ukm->penguruses()->save($pengurus);
        }

        // $ukm->save();
        dd($pengurus);

        return redirect('/login-ukm')->with('success', 'Daftar akun berhasil. Silahkan login!');
    }
}
