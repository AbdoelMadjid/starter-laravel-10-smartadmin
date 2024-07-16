@extends('inc.main_auth')
@section('title', 'Welcome')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('inc._auth_header')
        <a href="/login" class="btn btn-primary text-white ml-auto">
            Login
        </a>
    @endcomponent
    <div class="flex-1"
        style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row">
                <div class="col col-md-6 col-lg-7">
                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                        LAPORAN CAPAIAN PEMBELAJARAN SISWA
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                            Capaian Pembelajaran (CP) merupakan kompetensi pembelajaran yang harus dicapai peserta didik di
                            akhir setiap fase <br>
                            <a href="https://pusatinformasi.guru.kemdikbud.go.id/hc/id/articles/14150208845081-Pengertian-Capaian-Pembelajaran-CP"
                                class="fs-lg fw-500 text-white opacity-70" target="_blank">selengkapnya &gt;&gt;</a>
                        </small>
                    </h2>
                    <p class="text-white opacity-50">Aplikasi Rapor <a
                            href="https://id.wikipedia.org/wiki/Kurikulum_Merdeka" class="text-white opacity-70">Kurikulum
                            Merdeka</a> <br>Khusus
                        <a href="https://www.google.com/maps/place/SMKN+1+Kadipaten/@-6.7848705,108.1685372,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f290a172857b7:0x9b75b5e0e32203c8!8m2!3d-6.7848758!4d108.1711121!16s%2Fg%2F11jf9s3_9t?entry=ttu"
                            class="text-white opacity-70"> SMKN 1 Kadipaten </a> Majalengka
                    </p>
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
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto hidden-sm-down">
                    <div class="py-4">
                        <img src="/admin/img/siswakumpul.png" class="display-3 img-responsive" height="400"
                            alt="thumbnail">
                    </div>
                </div>
            </div>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} - @php echo date('Y'); @endphp © {{ $profileApp->app_pengembang ?? '' }}
            by&nbsp;<a href="https://laravel.com/docs/10.x" title='laravel.com' class="btn-link font-weight-bold"
                target="_blank">Laravel
                v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
            </div>
        </div>
    </div>
@endsection
