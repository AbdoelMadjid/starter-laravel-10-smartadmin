@extends('admin.inc.main')
@section('title', 'Error 403')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb')
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'digging',
                'heading1' => 'Error 403',
            ])
            @endcomponent
        </div>

        <div class="subheader"></div>
        <div class="h-alt-hf d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="page-error color-fusion-500">
                ERROR <span class="text-gradient">403</span>
                <small class="fw-500">
                    FORBIDDEN!
                </small>
            </h1>
            <h3 class="fw-500 mb-5">
                Anda tidak berhak untuk masuk ke halaman ini.
            </h3>
        </div>
    </main>
@endsection
