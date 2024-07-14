<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Unit</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <style>
        body {
            margin: 0;
        }

        .gradient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.53);
            z-index: 1;
        }

        .container-full-height {
            position: relative;
            z-index: 2;
        }

        .white-half-custom {
            position: relative;
            overflow: hidden;
            background: white;
            z-index: 2;
        }

        .white-half-custom img {
            width: 120%;
            height: auto;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .input-inline {
            background: none;
            color: #fff;
            border: none;
            border-bottom: 0.5px solid #fff;
            width: 100%;
            border-radius: none;
        }

        .input-inline::placeholder {
            color: #fff;
            font-size: 14px;
        }

        .form-control:focus {
            background: transparent;
            color: #fff;
        }
    </style>

</head>

<body class="h-100">
    <div class="gradient-bg"></div>
    <div class="container-fluid container-full-height">
        @if (session()->has('failed'))
            <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700" role="alert">
                {{ session('failed') }}
            </div>
        @endif
        <div class="row h-100">
            <!-- boostrep Left half (Red, col-md-5) -->
            <div class="col-md-6 red-half no-padding"
                style="clip-path: polygon(0% 0, 90% 0, 100% 100%, 0 100%); position: relative; z-index: 2;">
                <div class="row" style="width: 450px;">
                    <form action="signin-admin" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <h3 class="text-white text-center">Login</h3>
                            <br>
                            <div class="group8">
                                <input required="true" class="main-input8" type="text" name="email">
                                <span class="highlight-span8"></span>
                                <label class="lebal-email8">Email SSO</label>
                            </div>
                            <div class="container-8">
                                <div class="group8">
                                    <input required="true8" class="main-input8" type="password" name="password">
                                    <span class="highlight-span8"></span>
                                    <label class="lebal-email8">Password</label>
                                </div>
                            </div>
                            <small class="text-s"></small><a style="text-decoration: none;" href="forgetpass.html"><span
                                    style="color: #000">Forgot password?</a></span></small>
                            <p class="text-white text-center mt-5" style="cursor: pointer;">
                                Belum punya akun? <a style="text-decoration: none;"href="/register-mahasiswa"><span
                                        style="color: #000">Register</a></span>
                            </p>

                            <div class="col-lg-12 text-center mt-5">
                                <button class="btn btn-secondary btn-sm btn-custom-login-white">
                                    Masuk
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- boostrep Right half (White, col-md-6) -->
            <div class="col-md-6 white-half white-half-custom">
                <!-- boostrap right half goes here -->
                <img src="{{ asset('images/login-hero.png') }}" alt="">
                <div class="content-wrapper">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
