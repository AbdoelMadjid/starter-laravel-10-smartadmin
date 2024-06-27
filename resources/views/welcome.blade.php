@extends('admin.inc.main_auth')
@section('title', 'Auto Locked')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('admin.inc._auth_header')
        <a href="/login" class="btn-link text-white ml-auto">
            Login
        </a>
    @endcomponent
    <div class="d-flex flex-1"
        style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
            <div id="js-login" class="text-center text-white mb-5 pb-5">
                <div class="py-4">
                    <img src="/admin/img/favicon/siswa.png" class="display-3 img-responsive rounded-circle img-thumbnail"
                        alt="thumbnail">
                </div>
                <div class="form-group">
                    <h1>
                        LAPORAN CAPAIAN PEMBELAJARAN SISWA
                        <small>
                            SMKN 1 KADIPATEN MAJALENGKA
                        </small>
                    </h1>
                    <p class="text-white opacity-50">Aplikasi Rapor Kurikulum Merdeka</p>
                </div>
            </div>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_nama ?? '' }} by&nbsp;<a
                    href="https://laravel.com/docs/10.x" title='laravel.com' class="text-white opacity-90"
                    target="_blank">Laravel
                    v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
            </div>
        </div>
    </div>
@endsection
@section('pages-script')
    <script>
        $("#js-login-btn").click(function(event) {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });
    </script>
@endsection
