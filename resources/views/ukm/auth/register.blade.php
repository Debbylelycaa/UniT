<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>register ukm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/register_ukm.css') }}" />
</head>

<body>
    <img class="regis-bg" src="{{ asset('images/Regis_UKM.png') }}" width="100%" />
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="register-ukm mt-5">
                    <div class="row" style="width: 950px">
                        <div class="col-lg-12">
                            <form id="formUtama" class="form" action="create-ukm" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-white text-center"><b>Register</b></h3>
                                <br />

                                <div class="group8">
                                    <input required="true" class="main-input8 @error('nama') is-invalid @enderror"
                                        type="text" name="nama" id="nama" />
                                    <span class="highlight-span8"></span>
                                    <label class="lebal-email8">Nama</label>
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="container-8">
                                    <div class="group8">
                                        <input required="true" class="main-input8 @error('email') is-invalid @enderror"
                                            type="email" name="email" id="email" />
                                        <span class="highlight-span8"></span>
                                        <label class="lebal-email8">Email</label>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="container-8">
                                    <div class="group8">
                                        <input required="true8"
                                            class="main-input8 @error('password') is-invalid @enderror" type="password"
                                            name="password" id="password" />
                                        <span class="highlight-span8"></span>
                                        <label class="lebal-email8">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="container-8">
                                    <div class="group8">
                                        <input required="true8"
                                            class="main-input8 @error('confirm-password') is-invalid @enderror"
                                            type="password" name="confirm-password" id="confirm-password" />
                                        <span class="highlight-span8"></span>
                                        <label class="lebal-email8">Confirm Password</label>
                                        @error('consfirm-password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- <div class="container-9"> -->
                                <div class="group8">
                                    <label class="lebal-email9">Deskripsi Organisasi</label>
                                    <input required="true8" class="main-input9 @error('deskripsi') is-invalid @enderror"
                                        type="text" name="deskripsi" id="deskripsi" />
                                    <span class="highlight-span8"></span>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="container-8">
                                    <div class="group8">
                                        <input required="true8" class="main-input8 @error('visi') is-invalid @enderror"
                                            type="text" name="visi" id="visi" />
                                        <span class="highlight-span8"></span>
                                        <label class="lebal-email8">Visi Organisasi</label>
                                        @error('visi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="group8">
                                    <label class="lebal-email9">Misi Organisasi</label>
                                    <input required="true8" class="main-input9 @error('misi') is-invalid @enderror"
                                        type="text" name="misi" id="misi" />
                                    <span class="highlight-span8"></span>
                                    @error('misi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row group8">
                                    <label class="lebal-email9">Logo</label>
                                    <div class="col-9" style="flex-direction: row-reverse">
                                        <label class="file-upload-label">
                                            <div class="file-upload-design">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="60"
                                                    viewBox="0 0 140 135" fill="none">
                                                    <path
                                                        d="M56.0816 78.8857V56.3469H71.0367L52.3428 33.8082L33.649 56.3469H48.6041V78.8857H29.9102V78.6979C29.2821 78.7355 28.6839 78.8857 28.0408 78.8857C20.6039 78.8857 13.4716 75.9175 8.21296 70.6339C2.95429 65.3504 0 58.1843 0 50.7123C0 36.2574 10.8798 24.4771 24.8404 22.8618C26.0644 16.433 29.4798 10.6336 34.4992 6.46111C39.5186 2.28866 45.8282 0.00396693 52.3428 0C58.8583 0.00366378 65.169 2.28808 70.1896 6.46044C75.2103 10.6328 78.6272 16.4324 79.8527 22.8618C93.8133 24.4771 104.678 36.2574 104.678 50.7123C104.678 58.1843 101.724 65.3504 96.4652 70.6339C91.2066 75.9175 84.0743 78.8857 76.6374 78.8857C76.0093 78.8857 75.4036 78.7355 74.768 78.6979V78.8857H56.0816Z"
                                                        fill="url(#paint0_linear_790_1359)" />
                                                    <defs>
                                                        <linearGradient id="paint0_linear_790_1359" x1="52"
                                                            y1="-51.5" x2="52" y2="137.5"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop offset="0.0572917" stop-color="white" />
                                                            <stop offset="0.791667" stop-color="#DB5F1E" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                                <p class="text-white">Drag and Drop OR</p>
                                                <span class="browse-button"><b>Browse</b></span>
                                                <input class="@error('logo') is-invalid @enderror" type="file"
                                                    name="logo" id="logo" />
                                            </div>
                                        </label>
                                        {{-- <label for="lebal-email" style="color: white">Logo</label>
                                    <input type="file" name="logo" id="logo"
                                        class="main-input @error('logo') is-invalid @enderror">
                                    <span class="highlight-span"></span>
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                    </div>
                                    {{-- <div class="col-3 logo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150"
                                            viewBox="0 0 199 199" fill="none">
                                            <circle cx="99.5" cy="99.5" r="99.5" fill="white"
                                                fill-opacity="0.5" />
                                            <circle cx="99.4993" cy="99.5" r="84.5969" fill="#D64838" />
                                        </svg>
                                    </div> --}}
                                </div>

                                <div class="group8">
                                    <label class="lebal-email9">Link Grup</label>
                                    <input required="true8"
                                        class="main-input9 @error('link_grup') is-invalid @enderror" type="text"
                                        name="link_grup" id="link_grup" />
                                    <span class="highlight-span8"></span>
                                    @error('link_grup')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="group8">
                                    <label class="lebal-email9">Instagram</label>
                                    <input required="true8"
                                        class="main-input9 @error('instagram') is-invalid @enderror" type="text"
                                        name="instagram" id="instagram" />
                                    <span class="highlight-span8"></span>
                                    @error('instagram')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="group8">
                                    <label class="lebal-email9">Telepon</label>
                                    <input required="true8"
                                        class="main-input9 @error('telepon') is-invalid @enderror" type="text"
                                        name="telepon" id="telepon" />
                                    <span class="highlight-span8"></span>
                                    @error('telepon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="group8" id="groupUtama">
                                    <label for="kepengurusan" class="lebal-email9 custom-label">Struktur dan Bagan
                                        Kepengurusan Organisasi</label>
                                    <div class="row">
                                        <input type="hidden" name="ava_pengurus_utama[]">
                                        <input type="hidden" name="nama_pengurus_utama[]">
                                        <input type="hidden" name="jabatan_pengurus_utama[]">
                                        <input type="hidden" name="jurusan_pengurus_utama[]">
                                        <div class="col-2" id="daftar_pengurus"></div>

                                        <div class="col-2">
                                            <div class="card card-kepengurusan">
                                                <svg style="cursor: pointer" width="80" height="80"
                                                    xmlns="http://www.w3.org/2000/svg" width="119" height="119"
                                                    viewBox="0 0 119 119" fill="none">
                                                    <circle cx="59.5" cy="59.5" r="59.5" fill="#EAEAEA"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter" />
                                                    <rect x="51" y="15" width="18" height="89" rx="9"
                                                        fill="#D64838" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter" />
                                                    <rect x="15.5" y="68.5" width="18" height="89"
                                                        rx="9" transform="rotate(-90 15.5 68.5)"
                                                        fill="#D64838" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="group8">
                                    <label class="lebal-email9">Bukti SK Pengesahan Organisasi Kepengurusan</label>
                                    <label class="file-upload-label-bukti">
                                        <div class="file-upload-design">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="60"
                                                viewBox="0 0 140 135" fill="none">
                                                <path
                                                    d="M56.0816 78.8857V56.3469H71.0367L52.3428 33.8082L33.649 56.3469H48.6041V78.8857H29.9102V78.6979C29.2821 78.7355 28.6839 78.8857 28.0408 78.8857C20.6039 78.8857 13.4716 75.9175 8.21296 70.6339C2.95429 65.3504 0 58.1843 0 50.7123C0 36.2574 10.8798 24.4771 24.8404 22.8618C26.0644 16.433 29.4798 10.6336 34.4992 6.46111C39.5186 2.28866 45.8282 0.00396693 52.3428 0C58.8583 0.00366378 65.169 2.28808 70.1896 6.46044C75.2103 10.6328 78.6272 16.4324 79.8527 22.8618C93.8133 24.4771 104.678 36.2574 104.678 50.7123C104.678 58.1843 101.724 65.3504 96.4652 70.6339C91.2066 75.9175 84.0743 78.8857 76.6374 78.8857C76.0093 78.8857 75.4036 78.7355 74.768 78.6979V78.8857H56.0816Z"
                                                    fill="url(#paint0_linear_790_1359)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_790_1359" x1="52"
                                                        y1="-51.5" x2="52" y2="137.5"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop offset="0.0572917" stop-color="white" />
                                                        <stop offset="0.791667" stop-color="#DB5F1E" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                            <p class="text-white">Drag and Drop OR</p>
                                            <span class="browse-button"><b>Browse</b><input type="file"
                                                    class="@error('pengesahan') is-invalid @enderror"
                                                    name="pengesahan" id="pengesahan" /></span>
                                            {{-- <input id="file" type="file"
                                                class="@error('pengesahan') is-invalid @enderror"
                                                name="pengesahan" /> --}}
                                        </div>
                                    </label>
                                    @error('pengesahan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="text-center mt-5" style="margin-bottom: 90px">
                                    <button type="submit" id="submitRegister"
                                        class="btn btn-secondary btn-sm btn-custom-login-white">
                                        <b>Register</b>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: auto; color: transparent">
                <div class="modal-body text-center">
                    <form id="formKepengurusan" enctype="multipart/form-data">
                        <div class="cardpopup" id="pengurusContainer">
                            <div class="card-1">
                                <br /><br />
                                <svg width="150" height="79" viewBox="0 0 105 79" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M56.0816 78.8857V56.3469H71.0367L52.3428 33.8082L33.649 56.3469H48.6041V78.8857H29.9102V78.6979C29.2821 78.7355 28.6839 78.8857 28.0408 78.8857C20.6039 78.8857 13.4716 75.9175 8.21296 70.6339C2.95429 65.3504 0 58.1843 0 50.7123C0 36.2574 10.8798 24.4771 24.8404 22.8618C26.0644 16.433 29.4798 10.6336 34.4992 6.46111C39.5186 2.28866 45.8282 0.00396693 52.3428 0C58.8583 0.00366378 65.169 2.28808 70.1896 6.46044C75.2103 10.6328 78.6272 16.4324 79.8527 22.8618C93.8133 24.4771 104.678 36.2574 104.678 50.7123C104.678 58.1843 101.724 65.3504 96.4652 70.6339C91.2066 75.9175 84.0743 78.8857 76.6374 78.8857C76.0093 78.8857 75.4036 78.7355 74.768 78.6979V78.8857H56.0816Z"
                                        fill="url(#paint0_linear_1_505)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_1_505" x1="52.3391" y1="0"
                                            x2="52.3391" y2="78.8857" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.0572917" stop-color="#A80000" />
                                            <stop offset="0.791667" stop-color="#DB5F1E" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <br />
                                <br />
                                <span style="font-weight: 200; color: black">Drag and Drop File OR
                                </span>
                                <br />
                                <br />
                                {{-- <button type="button" class="btn btn-secondary btn-sm btn-custom"
                                    onclick="triggerFileInput()">
                                    Browse
                                </button> --}}
                                <input id="ava_pengurus_1" type="file"
                                    class="ava_pengurus btn btn-secondary btn-sm btn-custom @error('ava_pengurus') is-invalid @enderror"
                                    name="ava_pengurus[]" />
                            </div>
                            <div class="rightpopup">
                                <div class="containerpopup">
                                    <div class="group8-modal">
                                        <input required="true" name="nama_pengurus[]" id="nama_pengurus_1"
                                            class="nama_pengurus main-input8-modal" type="text" />
                                        <span class="highlight-span8-modal"></span>
                                        <label class="lebal-email8-modal">Nama</label>
                                    </div>
                                </div>
                                <div class="containerpopup">
                                    <div class="group8-modal">
                                        <input required="true" name="jabatan_pengurus[]" id="jabatan_pengurus_1"
                                            class="jabatan_pengurus main-input8-modal" type="text" />
                                        <span class="highlight-span8-modal"></span>
                                        <label class="lebal-email8-modal">Jabatan</label>
                                    </div>
                                </div>
                                <div class="containerpopup">
                                    <div class="group8-modal">
                                        <input required="true" name="jurusan_pengurus[]" id="jurusan_pengurus_1"
                                            class="jurusan_pengurus main-input8-modal" type="text" />
                                        <span class="highlight-span8-modal"></span>
                                        <label class="lebal-email8-modal">Jurusan</label>
                                    </div>
                                </div>
                                <div class="modal-body" style="text-align: end">
                                    <button type="button" id="simpan_pengurus" class="btn btn-light"
                                        data-dismiss="modal">
                                        Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script>
        let tempMembers = [];

        function addTemporaryMember(ava, nama, jabatan, jurusan) {
            tempMembers.push({
                ava: ava,
                nama: nama,
                jabatan: jabatan,
                jurusan: jurusan
            })
        }

        const form = document.querySelector('form');

        document.getElementById('simpan_pengurus').addEventListener('click', function() {
            // Ambil nilai-nilai dari form modal
            let avaInput = document.getElementById('ava_pengurus_1');
            let nama = document.getElementById('nama_pengurus_1').value;
            let jabatan = document.getElementById('jabatan_pengurus_1').value;
            let jurusan = document.getElementById('jurusan_pengurus_1').value;

            let ava = avaInput.files[0];

            let avaUrl = URL.createObjectURL(ava);

            let newCard = `
                <div class="card card-kepengurusan-ex text-center">
                    <img src="${avaUrl}"
                        style="background-color: #e6e6e6"
                        class="card-img-top card-img-p-2" alt="" />
                    <p class="card-title card-kepengurusan-title text-white">
                        <br />
                        ${nama} <br />${jabatan} <br />
                        ${jurusan}
                    </p>
                </div>
            `;

            let daftarPengurus = document.getElementById('daftar_pengurus');
            daftarPengurus.innerHTML += newCard;

            addTemporaryMember(ava, nama, jabatan, jurusan);

            // Bersihkan nilai-nilai formulir modal untuk input selanjutnya
            avaInput.value = '';
            document.getElementById('nama_pengurus_1').value = '';
            document.getElementById('jabatan_pengurus_1').value = '';
            document.getElementById('jurusan_pengurus_1').value = '';
        });

        document.getElementById('submitRegister').addEventListener('click', function(event) {
            event.preventDefault();

            console.log(tempMembers);

            const formData = new FormData(form);

            formData.append('nama', document.getElementById('nama').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('password', document.getElementById('password').value);
            formData.append('confirm-password', document.getElementById('confirm-password').value);
            formData.append('visi', document.getElementById('visi').value);
            formData.append('misi', document.getElementById('misi').value);
            formData.append('logo', document.getElementById('logo').files[0]);
            formData.append('link_grup', document.getElementById('link_grup').value);
            formData.append('instagram', document.getElementById('instagram').value);
            formData.append('telepon', document.getElementById('telepon').value);
            formData.append('pengesahan', document.getElementById('pengesahan').files[0]);

            tempMembers.forEach((member, index) => {
                formData.append(`ava_pengurus_utama[${index}]`, member.ava);
                formData.append(`nama_pengurus_utama[${index}]`, member.nama);
                formData.append(`jabatan_pengurus_utama[${index}]`, member.jabatan);
                formData.append(`jurusan_pengurus_utama[${index}]`, member.jurusan);
            });

            for (item of formData) {
                console.log(item[0], item[1]);
            }


            // Fetch API to send AJAX requests with CSRF token header
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            axios.post('/create-ukm', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'X-CSRF-TOKEN': csrfToken
                    }
                })
                .then(response => {
                    console.log(response.data);
                    window.location.href = '/login-ukm';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
</body>

</html>
