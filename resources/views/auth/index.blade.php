<!DOCTYPE html>
<!--
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.5.1
Author: Sunnyat A.
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0?ref=myorange
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc._auth_head')
    <link rel="stylesheet" media="screen, print" href="/admin/css/page-login-alt.css">
</head>
<!-- BEGIN Body -->
<!-- Possible Classes

  * 'header-function-fixed'         - header is in a fixed at all times
  * 'nav-function-fixed'            - left panel is fixed
  * 'nav-function-minify'			  - skew nav to maximize space
  * 'nav-function-hidden'           - roll mouse on edge to reveal
  * 'nav-function-top'              - relocate left pane to top
  * 'mod-main-boxed'                - encapsulates to a container
  * 'nav-mobile-push'               - content pushed on menu reveal
  * 'nav-mobile-no-overlay'         - removes mesh on menu reveal
  * 'nav-mobile-slide-out'          - content overlaps menu
  * 'mod-bigger-font'               - content fonts are bigger for readability
  * 'mod-high-contrast'             - 4.5:1 text contrast ratio
  * 'mod-color-blind'               - color vision deficiency
  * 'mod-pace-custom'               - preloader will be inside content
  * 'mod-clean-page-bg'             - adds more whitespace
  * 'mod-hide-nav-icons'            - invisible navigation icons
  * 'mod-disable-animation'         - disables css based animations
  * 'mod-hide-info-card'            - hides info card from left panel
  * 'mod-lean-subheader'            - distinguished page header
  * 'mod-nav-link'                  - clear breakdown of nav links

  >>> more settings are described inside documentation page >>>
 -->

<body>
    <!-- DOC: script to save and load page settings -->
    @include('inc._script_page_settings')

    <div class="blankpage-form-field">
        <div
            class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                <img src="/admin/img/{{ $profileApp->app_logo ?? '' }}" alt="{{ $profileApp->app_nama ?? '' }} WebApp"
                    aria-roledescription="logo">
                <span class="page-logo-text mr-1">{{ $profileApp->app_nama ?? '' }} WebApp</span>

            </a>
        </div>
        <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">

            @if (session()->has('message'))
                <div class="mb-3 alert alert-danger alert-dismissible fade show border-faded border-left-0 border-right-0 border-top-0 rounded-0 m-0"
                    role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert bg-danger-400 text-white fade show" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <span class="h5">Login Gagal !!</span>
                            <br>
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif

            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                        id="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" />
                    @error('email')
                        <span class="help-block">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                        id="password" placeholder="Masukkan kata kunci" />
                    @error('password')
                        <span class="help-block">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group text-left">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-default float-right">Masuk</button>
            </form>
        </div>
        <div class="blankpage-footer text-center">
            <a href="/"><strong>Kembali</strong></a> | <a
                href="/page_auth_register"><strong>Registrasi</strong></a>
        </div>
    </div>
    <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
        <div class="row">
            <div class="col col-sm-12 text-center text-primary">
                {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_nama ?? '' }} by&nbsp;<a
                    href="https://laravel.com/docs/10.x" title='laravel.com' class="opacity-90" target="_blank">Laravel
                    v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
            </div>
        </div>
    </div>
    <video poster="/admin/img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted loop>
        <source src="/admin/media/video/cc.webm" type="video/webm">
        <source src="/admin/media/video/cc.mp4" type="video/mp4">
    </video>
    <!-- BEGIN Color profile -->
    <!-- this area is hidden and will not be seen on screens or screen readers -->
    <!-- we use this only for CSS color refernce for JS stuff -->
    @include('inc._color_profile')
    <!-- END Color profile -->
    @include('inc._script_bundle')
</body>
<!-- END Body -->

</html>
