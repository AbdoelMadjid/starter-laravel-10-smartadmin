@extends('inc.main_auth')
@section('title', 'Error 404')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('inc._auth_header')
        <a href="/" class="btn-link text-white ml-auto"></a>
    @endcomponent
    <div class="d-flex flex-1"
        style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
            <div class="h-alt-hf d-flex flex-column align-items-center justify-content-center text-center">
                <div class="py-3">
                    <img src="/admin/img/8.png" class="display-3 img-responsive" alt="thumbnail">
                </div>
                <h3 class="fw-500 mb-5">
                    oops !!! That page can't be found.
                </h3>
                <div class="mt-2">
                    <a href="/" class="btn btn-primary">
                        <span class="fw-700">Dashboard</span>
                    </a>
                </div>
            </div>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_nama ?? '' }} <a
                    href="https://laravel.com/docs/10.x" title='laravel.com' class="text-white opacity-90"
                    target="_blank">Laravel
                    v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
            </div>
        </div>
    </div>
@endsection
