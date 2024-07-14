<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForgetPassController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MendaftarController;
use App\Http\Controllers\UkmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard-mhs', [MahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
    Route::get('/ukm', [MahasiswaController::class, 'viewUkm'])->name('mahasiswa.ukm');
    Route::get('/event', [MahasiswaController::class, 'viewEvent'])->name('mahasiswa.event');

    Route::get('/detail-event/{id}', [EventController::class, 'detailEvent'])->name('mahasiswa.detail-event');

    Route::get('/detail-ukm/{id}', [MahasiswaController::class, 'detailUkm'])->name('mahasiswa.detail-ukm');

    Route::post('/daftar-ukm/{id}', [MendaftarController::class, 'daftarUkm']);
    Route::delete('/batalkan-pendaftaran/{id}', [MendaftarController::class, 'batalkanPendaftaranUkm']);

    Route::get('/logout', [LogoutController::class, 'logout']);
});

Route::get('/', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/forget-pass', [ForgetPassController::class, 'index']);
Route::post('/forget-password', [ForgetPassController::class, 'forgetPassword']);
Route::get('/verification/{id}', [ForgetPassController::class, 'verification']);
Route::post('/verified', [ForgetPassController::class, 'verifiedOtp']);
Route::post('/resend', [ForgetPassController::class, 'resendOtp']);
Route::get('/ganti-password', [ForgetPassController::class, 'viewChangePassword']);
Route::post('/submit-ganti-password', [ForgetPassController::class, 'changePassword']);

Route::get('/login-mahasiswa', [LoginController::class, 'loginMahasiswa']);
Route::any('/sign-in', [LoginController::class, 'authenticate']);

Route::get('/register-mahasiswa', [RegisterController::class, 'create']);
Route::post('/create-user', [RegisterController::class, 'store']);

Route::get('/login-admin', [AdminController::class, 'loginAdmin']);
Route::any('/signin-admin', [AdminController::class, 'authAdmin']);
Route::get('/signout-admin', [AdminController::class, 'signoutAdmin']);

Route::get('/dashboard-admin', [AdminController::class, 'index']);
Route::get('/review/{id}', [AdminController::class, 'review'])->name('admin.review');
Route::put('/update-event-status/{eventId}/{status}', [AdminController::class, 'updateEventStatus']);

Route::get('/login-ukm', [UkmController::class, 'loginUkm']);

Route::get('/register-ukm', [UkmController::class, 'registUkm']);
Route::post('/create-ukm', [UkmController::class, 'createUkm']);
Route::any('/signin-ukm', [UkmController::class, 'authUkm']);
Route::get('/signout', [UkmController::class, 'signout']);

Route::get('/dashboard-ukm', [UkmController::class, 'dashboardUkm'])->name('ukm.dashboard');

Route::get('/edit-ukm', [UkmController::class, 'editUkm'])->name('ukm.edit');
Route::post('/update-ukm', [UkmController::class, 'updateUkm']);
Route::get('/daftar-pendaftar', [UkmController::class, 'viewDaftarPendaftar'])->name('ukm.daftar-pendaftar');

Route::get('/upload-proposal', [EventController::class, 'proposalForm'])->name('ukm.upload-proposal');

Route::get('/history', [EventController::class, 'viewHistory'])->name('ukm.history');
Route::post('/submit-proposal', [EventController::class, 'submitProposal']);
