@extends('inc.main')
@section('title', 'Data Login')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Tools',
        ])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'sign-in',
                'heading1' => 'Data',
                'heading2' => 'Login',
            ])
            @endcomponent
        </div>
        <x-col size1=12>
            <x-slot name="content1">
                <div class="card mb-2 shadow-5">
                    <div class="card-body">
                        <div class="text-center mt-5 mb-5">
                            <div class='icon-stack display-1 flex-shrink-0 d-block m-auto'>
                                <i class="fal fa-circle icon-stack-4x opacity-100 color-primary-400"></i>
                                <i class="fas fa-key icon-stack-1x opacity-100 color-primary-500"></i>
                            </div>
                            <div class="p-1 text-center">
                                <strong class="fw-900 fs-xxl color-primary-400">
                                    LOGIN USERS
                                </strong>
                                <br>
                                Laporan Capaian Kompetensi Siswa
                            </div>

                        </div>
                        <div class="text-center mt-5 mb-5">
                            <div class="btn-group">
                                <button type="button" class="btn blcok btn-primary">Guru</button>
                                <button type="button" class="btn blcok btn-primary">Wali Kelas</button>
                                <button type="button" class="btn blcok btn-primary">Siswa</button>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-col>
    </main>
@endsection
