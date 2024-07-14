<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniT</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/start.css') }}">

</head>

<body class="register-body3">
    <form class="form3", method="POST" action="/submit-ganti-password">
        @csrf
        <p>Verifikasi OTP</p>
        <div class="container-3">
            <div class="group3">
                <input type="hidden" name="email" id="email" value="{{ $email }}">
                <input required="true" name="password" id="password" class="main-input" type="password">
                <span class="highlight-span"></span>
                <label class="lebal-email">Kata sandi baru</label>
            </div>
        </div>
        <div class="container-3">
            <div class="group3">
                <input required="true" name="confirm-password" id="confirm-password" class="main-input3" type="password">
                <span class="highlight-span3"></span>
                <label class="lebal-email3">Konfirmasi kata sandi</label>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <button type="Submit" class="btn btn-secondary btn-sm btn-custom-login-white"> Kirim
            </button>
        </div>
    </form>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
