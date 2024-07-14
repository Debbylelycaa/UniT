<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        $ukms = Ukm::all();

        return view('admin.dashboard', [
            'admin' => $admin,
            'ukms' => $ukms,
        ]);
    }

    public function review($id)
    {
        $event = Event::find($id);
        $admin = Auth::guard('admin')->user();
        $ukm = Ukm::find($event->ukm_id);

        return view('admin.review', [
            'admin' => $admin,
            'event' => $event,
            'ukm' => $ukm
        ]);
    }

    public function updateEventStatus(Request $request, $eventId, $status)
    {
        $event = Event::findOrFail($eventId);

        if ($status === 'Decline' || $status === 'Accepted') {
            $event->status = $status;
            $event->save();

            return redirect('/dashboard-admin')->with('message', 'Status event berhasil diperbarui.');
        } else {
            return redirect('/dashboard-admin')->with('error', 'Status event tidak valid.');
        }
    }


    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function authAdmin(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard-admin');
        }

        return back()->with('failed', 'Percobaan masuk gagal. Silahkan coba lagi!');
    }

    public function signoutAdmin(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
