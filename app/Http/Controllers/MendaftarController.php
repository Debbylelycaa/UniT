<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MendaftarController extends Controller
{
    public function daftarUkm(Request $request, $ukmId)
    {
        $ukm = Ukm::find($ukmId);

        if (!$ukm) {
            return redirect()->back()->with('error', 'UKM tidak ditemukan');
        }

        $user = Auth::user();

        // Periksa apakah pengguna sudah terdaftar di UKM tersebut
        if ($user->ukms()->where('ukm_id', $ukmId)->exists()) {
            return redirect()->back()->with('error', 'Anda sudah terdaftar di UKM ini');
        }

        // Tambahkan user ke UKM
        $user->ukms()->attach($ukmId);

        return redirect()->back()->with('success', 'Berhasil mendaftar di UKM');
    }

    public function batalkanPendaftaranUkm($ukmId)
    {
        $user = auth()->user();

        $user->ukms()->detach($ukmId);
        return redirect()->back()->with('success', 'Pendaftaran UKM dibatalkan.');
    }
}
