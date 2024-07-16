@extends('inc.main')
@section('title', 'Error 403')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb')
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'digging',
                'heading1' => 'Error 403',
            ])
            @endcomponent
        </div>

        <div class="subheader"></div>
        <div class="h-alt-hf d-flex flex-column align-items-center justify-content-center text-center">
            <div class="py-3">
                <img src="/admin/img/5.png" class="display-3 img-responsive" height="300" alt="thumbnail">
            </div>
            <h3 class="fw-500 mb-5">
                Anda tidak berhak untuk masuk ke halaman ini.
            </h3>
        </div>
    </main>
@endsection
