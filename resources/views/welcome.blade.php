@extends('admin.inc.main_auth')
@section('title', 'Welcome')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('admin.inc._auth_header')
        <a href="/login" class="btn-link text-white ml-auto">
            Login
        </a>
    @endcomponent
    <div class="flex-1"
        style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row">
                <div class="col col-md-6 col-lg-7 hidden-sm-down">
                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                        LAPORAN CAPAIAN PEMBELAJARAN SISWA
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                            Presenting you with the next level of innovative UX design and engineering. The
                            most modular toolkit available with over 600+ layout permutations. Experience
                            the simplicity of SmartAdmin, everywhere you go!
                        </small>
                    </h2>
                    <p class="text-white opacity-50">Aplikasi Rapor Kurikulum Merdeka</p>
                    <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                    <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                        <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                            Find us on social media
                        </div>
                        <div class="d-flex flex-row opacity-70">
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-google-plus-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                    <div class="py-4">
                        <img src="/admin/img/siswakumpul.png" class="display-3 img-responsive" height="250"
                            alt="thumbnail">
                    </div>
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
