<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniT</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('../css/start.css') }}">
</head>

<body class="register-body">
    <form class="form" action="create-user" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Register</p>
        <div class="group">
            <input required="true" name="email" class="main-input @error('email') is-invalid @enderror" type="email">
            <span class="highlight-span"></span>
            <label class="lebal-email">Email SSO</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="container-1">
            <div class="group">
                <input required="true" name="nama" class="main-input @error('nama') is-invalid @enderror" type="text">
                <span class="highlight-span"></span>
                <label class="lebal-email">Nama</label>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="container-1">
            <div class="group">
                <input required="true" name="nim" class="main-input @error('nim') is-invalid @enderror" type="text">
                <span class="highlight-span"></span>
                <label class="lebal-email">NIM</label>
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="container-1">
            <div class="group">
                <input required="true" name="jurusan" class="main-input @error('jurusan') is-invalid @enderror" type="text">
                <span class="highlight-span"></span>
                <label class="lebal-email">Jurusan</label>
                @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="container-1">
            <div class="group">
                <label for="lebal-email" style="color: white">Foto</label>
                <input type="file" name="foto" class="main-input @error('foto') is-invalid @enderror">
                <span class="highlight-span"></span>
                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="container-1">
            <div class="group">
                <input required="true" name="password" class="main-input @error('password') is-invalid @enderror" type="password">
                <span class="highlight-span"></span>
                <label class="lebal-email">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="container-1">
            <div class="group">
                <input required="true" name="confirm-password" class="main-input" type="password">
                <span class="highlight-span"></span>
                <label class="lebal-email">Confirm password</label>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <button class="btn btn-secondary btn-sm btn-custom-login-white" type="submit"> Register
            </button>
        </div>
    </form>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>
