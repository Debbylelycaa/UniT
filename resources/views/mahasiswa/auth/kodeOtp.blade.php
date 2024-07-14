<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniT</title>
    <link rel="icon" href="{{ Asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ Asset('css/start.css') }}">
</head>

<body class="register-body4">
    <form class="form4" action="/verified" method="POST">
        @csrf
        <div class="title">Verifikasi OTP </div>
        <p class="message">Masukkan Kode OTP yang telah dikirim ke email anda</p><br>
        {{-- <div method="get" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off"> --}}
        {{-- <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
            <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
            <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
            <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" /> --}}
        <div class="group8">
            {{-- <label class="lebal-email9">Deskripsi Organisasi</label> --}}
            <input type="hidden" name="email" id="email" value="{{ $email }}">
            <input required="true8" class="main-input9 @error('otp') is-invalid @enderror" type="text"
                name="otp" id="otp" />
            <span class="highlight-span8"></span>
            @error('otp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            {{-- </div> --}}
        </div>
        {{-- <h7>Tidak menerima OTP?</h7>
        <form class="form2" action="resend" method="POST">
            @csrf
            <p>Lupa Kata Sandi?</p>
            <h6>Masukan Email anda untuk mendapatkan kode OTP</h6>
            <div class="group2">
                <input required="true" name="email" id="email" class="main-input1" type="text">
                <span class="highlight-span1"></span>
                <label class="lebal-email1">Email</label>
            </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <button type="submit" class="btn btn-secondary btn-sm btn-custom-login-white"> Ganti Kata Sandi
                </button>
            </div>
        </form>
        <a style="text-decoration: none;" href="sandibaru.html"> <span style="color: #000">Kirim
                ulang OTP</a></span> --}}
        <br><br>
        <div class="col-lg-12 text-center mt-5">
            <button type="submit" style="text-decoration: none;"
                class="btn btn-secondary btn-sm btn-custom-login-white"> Verifikasi
            </a>
        </div>
    </form>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ Asset('js/kode.js') }}"></script>
</body>

</html>
