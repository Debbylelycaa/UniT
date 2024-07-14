<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function proposalForm()
    {
        $ukm = Auth::guard('ukm')->user();

        return view('ukm.upload-proposal', ['ukm' => $ukm]);
    }

    public function viewHistory()
    {
        $ukmId = Auth::guard('ukm')->id();
        $ukm = Auth::guard('ukm')->user();
        $events = Event::where('ukm_id', $ukmId)->get();

        return view('ukm.history', [
            'ukm' => $ukm,
            'events' => $events
    ]);
    }

    public function detailEvent($id)
    {
        $event = Event::find($id);

        $ukm = Ukm::find($event->ukm_id);

        return view('mahasiswa.detail-event', [
            'event' => $event,
            'ukm' => $ukm
        ]);
    }


    // Method untuk menyimpan proposal event
    public function submitProposal(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
        ]);

        // Menyimpan foto ke direktori tertentu
        $fotoPath = $request->file('foto')->store('public/foto_event');

        $event = Event::create([
            'judul' => $request->input('judul'),
            'foto' => $fotoPath,
            'deskripsi' => $request->input('deskripsi'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_selesai' => $request->input('tgl_selesai'),
            'status' => 'Pending', // Status default ketika proposal diajukan
            'ukm_id' => auth()->guard('ukm')->user()->id, // Mengambil id UKM yang login
        ]);

        return redirect()->route('ukm.dashboard')->with('success', 'Proposal event berhasil diajukan');
    }
}
