<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index()
    {
        $ukms = Ukm::all();
        $ukmPengguna = Auth::user()->ukms()->get();

        // Kemudian, Anda dapat memeriksa apakah pengguna terkait dengan UKM atau tidak
        if ($ukmPengguna->count() > 0) {
            $telahMendaftarKeUKM = true;
        } else {
            $telahMendaftarKeUKM = false;
        }


        return view('mahasiswa.dashboard', [
            'ukms' => $ukms,
            'telahTerdaftar' => $telahMendaftarKeUKM
        ]);
    }

    public function viewUkm()
    {
        $ukms = Ukm::all();

        return view('mahasiswa.ukm', ['ukms' => $ukms]);
    }

    public function viewEvent()
    {
        $events = Event::all()->where('status', 'Accepted');

        return view('mahasiswa.event', ['events' => $events]);
    }

    public function detailUkm($id)
    {
        $ukm = Ukm::find($id);
        $penguruses = $ukm->penguruses;

        return view('mahasiswa.detail-ukm', [
            'ukm' => $ukm,
            'penguruses' => $penguruses
        ]);
    }
}
