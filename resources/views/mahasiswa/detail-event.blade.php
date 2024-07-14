<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>detail event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/detail_event.css') }}">
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="text-center sidebar-header" onclick="location.href='/dashboard-mhs'"
                style="cursor: pointer;">
                <div class="text-center sidebar-icon">
                    <img class="sidebar-icon-image" src="{{ asset('images/logounit.png') }}" />
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand text-center" style="margin-bottom: 180px"></li>
                <li>
                    <div class="sidebar-link" onclick="location.href='/ukm'">
                        <div class="sidebar-link-text">UKM</div>
                    </div>
                    <div class="sidebar-link-event" onclick="location.href='/event'">
                        <div class="sidebar-link-text">Event</div>
                    </div>
                </li>
                <div class="sidebar-logout" onclick="location.href='login_2.html'">
                    <div class="sidebar-logout-icon">
                        Log out
                    </div>
                    <svg class="vector" width="24" height="37" viewBox="0 0 24 37" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.2857 0H1.71429C1.25963 0 0.823594 0.19491 0.502103 0.541852C0.180612 0.888795 0 1.35935 0 1.85V18.5L8.57143 11.1V16.65H18.8571V20.35H8.57143V25.9L0 18.5V35.15C0 35.6406 0.180612 36.1112 0.502103 36.4581C0.823594 36.8051 1.25963 37 1.71429 37H22.2857C22.7404 37 23.1764 36.8051 23.4979 36.4581C23.8194 36.1112 24 35.6406 24 35.15V1.85C24 1.35935 23.8194 0.888795 23.4979 0.541852C23.1764 0.19491 22.7404 0 22.2857 0Z"
                            fill="white" />
                    </svg>
                </div>
            </ul>
        </div>
        <!-- Sidebar -->

        <!-- Header -->
        <div class="header-tel-u" style="height: 250px;">
            <div class="row">
                <div>
                    <img src="{{ asset('images/btn-mhs.png') }}" class="background-btn" role="button"
                        href="/dashboard-mhs">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" viewBox="0 0 38 46"
                        fill="none" class="arrow" role="button" onclick="location.href='/dashboard-mhs'">
                        <path
                            d="M0.878681 20.8787C-0.292892 22.0502 -0.292893 23.9497 0.878681 25.1213L19.9706 44.2132C21.1421 45.3848 23.0416 45.3848 24.2132 44.2132C25.3848 43.0416 25.3848 41.1421 24.2132 39.9706L7.24264 23L24.2132 6.02944C25.3848 4.85786 25.3848 2.95837 24.2132 1.7868C23.0416 0.615222 21.1421 0.615221 19.9706 1.78679L0.878681 20.8787ZM38 20L3 20L3 26L38 26L38 20Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="col-lg-6">
                    <svg width="514" height="250" viewBox="0 0 714 329" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="362.622" y="283.32" width="113.678" height="113.678"
                            transform="rotate(-169.15 362.622 283.32)" fill="url(#paint0_linear_1_18)" />
                        <rect x="259.696" y="131.583" width="113.678" height="113.678"
                            transform="rotate(-169.15 259.696 131.583)" fill="url(#paint1_linear_1_18)" />
                        <rect x="505.255" y="186.57" width="113.678" height="113.678"
                            transform="rotate(-169.15 505.255 186.57)" fill="url(#paint2_linear_1_18)" />
                        <rect x="402.328" y="34.8328" width="113.678" height="113.678"
                            transform="rotate(-169.15 402.328 34.8328)" fill="url(#paint3_linear_1_18)" />
                        <rect x="646.674" y="90.6423" width="113.678" height="113.678"
                            transform="rotate(-169.15 646.674 90.6423)" fill="url(#paint4_linear_1_18)" />
                        <defs>
                            <linearGradient id="paint0_linear_1_18" x1="345.856" y1="229.936" x2="519.69"
                                y2="448.608" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_1_18" x1="242.929" y1="78.1989" x2="416.764"
                                y2="296.871" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_1_18" x1="488.488" y1="133.185" x2="662.323"
                                y2="351.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_1_18" x1="385.562" y1="-18.5516" x2="559.397"
                                y2="200.121" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_1_18" x1="629.907" y1="37.258" x2="803.742"
                                y2="255.93" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="col-lg-1"></div>

            </div>

            <div class="right-logo-outer"></div>
            <img class="right-logo-image" src="{{ asset($ukm->logo) }}" />

            <div class="nama-ukm">
                <h2><b>{{ $ukm->nama }}</b></h2>
            </div>

            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-4" style="z-index: 3; margin-left: 87%;"></div>
            </div>
        </div>
        <!-- Header -->

        <!-- isi -->
        <div style="position: absolute;">
            <div class="container-fluid deskripsi">
                <div class="row mt-5">
                    <div class="col-9 mt-5">
                        <div>
                            <p style="font-size: 25px; margin-left: 40px;">
                                {{ $ukm->nama }} Proudly Presents<br>
                                <br>
                                {{ $event->judul }}
                                <br>
                            </p>
                        </div>
                        <div class="row mt-2 event-desc" style="font-size: 18.5px;">
                            <div class="col-5 mt-4" style="margin-left: 40px;">
                                <img src="{{ Storage::url($event->foto) }}" style="width: 100%;" alt="">
                            </div>
                            <div class="col-5" style="margin-left: 40px;">
                                <p>
                                    {{ $event->deskripsi }}
                                </p>
                            </div>
                        </div>
                        <div class="row mt-5" style="font-size: 22px; margin-left: 40px;">
                            <div class="col-12">
                                <p> Tanggal mulai: <span>{{ $event->tgl_mulai }}</span>
                                </p>
                                <br>
                                <p>
                                    Tanggal selesai: <span>{{ $event->tgl_selesai }} </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of isi -->

        <!-- footer -->
        <footer class="footer mt-5">
            <div class="footer-left">
                <h1><strong>Kontak</strong></h1>
                <div class="img_">
                    <img src="{{ asset('images/footer.png') }}" width="300px" alt="">
                </div><br>
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Indonesia</span> Bandung,Jawa Barat</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>(022) 7566456</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">uniT@telkomuniversity.ac.id</a></p>
                </div>
            </div>


            <div class="footer-right">
                <div class="footer-media">
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>

                <p class="footer-about">
                    <span>About</span>
                    Di Channel ini kita akan berbagi barbagai Tutorial design, Pemograman dan lain-lain. Silahkan
                    subscribe untuk kemajuan channel ini, jangan lupa, like dan comments. agar channel ini semakin
                    berkembang
                </p>
            </div>
        </footer>
        <!-- end of footer -->


    </div>
    <!--  Wrapper sls -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
