<?php

namespace App\Http\Controllers;

use App\Models\OtpVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgetPassController extends Controller
{
    public function index()
    {
        return view('mahasiswa.auth.forgetpass');
    }

    public function forgetPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // $this->changePassword($request, $user);

        return redirect("/verification/" . $user->id);
    }

    public function sendOtp($user)
    {
        $otp = rand(100000, 999999);
        $time = time();

        OtpVerification::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'otp' => $otp,
                'created_at' => $time
            ]
        );

        $data['email'] = $user->email;
        $data['title'] = 'Email Verification';

        $data['body'] = 'Your OTP is:- ' . $otp;

        Mail::send('mahasiswa.auth.mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();

        $email = $user->email;
        $this->sendOtp($user);

        return view('mahasiswa.auth.kodeOtp', ['email' => $email]);
    }

    public function verifiedOtp(Request $request)
    {
        $otpData = OtpVerification::where('otp', $request->otp)->first();

        if (!$otpData) {
            return redirect('/login-mahasiswa')->with('failed', 'You entered wrong otp!');
        } else {
            $currentTime = time();
            $time = $otpData->created_at->timestamp;

            if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) {
                if ($request->has('email')) {
                    $request->session()->put('email_for_password_reset', $request->email);
                    return redirect('/ganti-password');
                } else {
                    // Handle jika tidak ada email yang diberikan pada request
                    return redirect('/login-mahasiswa')->with('failed', 'Invalid email for password reset!');
                }
            } else {
                return redirect('/login-mahasiswa')->with('failed', 'You OTP expired!');
            }
        }
    }

    public function viewChangePassword(Request $request)
    {
        $email = $request->session()->get('email_for_password_reset');
        return view('mahasiswa.auth.ganti-password', ['email' => $email]);
    }


    public function changePassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        // dd($request->all());

        // Mengambil data dari form yang dikirimkan
        $validatedData = $request->validate([
            'password' => 'required|min:8|same:confirm-password',
            'confirm-password' => 'required|min:8',
        ]);

        $update['password'] = $validatedData['password'];

        $user->update($update);

        return redirect('/login-mahasiswa')->with('message', 'Data berhasil diperbarui!');
    }

    public function resendOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $otpData = OtpVerification::where('otp', $request->otp)->first();

        $currentTime = time();
        $time = $otpData->created_at;

        if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) {
            return back()->with('failed', 'Please try again');
        } else {
            $this->sendOtp($user);
            return back()->with('success', 'OTP has been send!');
        }
    }
}
