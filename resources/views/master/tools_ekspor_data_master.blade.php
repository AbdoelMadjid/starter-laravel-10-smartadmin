@extends('inc.main')
@section('title', 'Ekspor Data Master')
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
                'icon' => 'file-export',
                'heading1' => 'Ekspor Data',
                'heading2' => 'Master',
            ])
            @endcomponent
        </div>
        <x-col size1=4 size2=8>
            <x-slot name="content1">
                <div class="card mb-g shadow-5">
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl fw-700">
                                    <i class="fal fa-ballot-check"></i> Pilih Jenis Data
                                </h2>
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <div class='icon-stack display-3 flex-shrink-0 m-auto'>
                                    <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                    <i class="fas fa-users-class icon-stack-1x opacity-100 color-primary-500"></i>
                                </div>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Tenaga Pendidik</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <div class='icon-stack display-3 flex-shrink-0 m-auto'>
                                    <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                    <i class="fas fa-user-graduate icon-stack-1x opacity-100 color-primary-500"></i>
                                </div>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Biodata Siswa</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <div class='icon-stack display-3 flex-shrink-0 m-auto'>
                                    <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                    <i class="fas fa-house-user icon-stack-1x opacity-100 color-primary-500"></i>
                                </div>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Wali Kelas</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <div class='icon-stack display-3 flex-shrink-0 m-auto'>
                                    <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                    <i class="fas fa-book icon-stack-1x opacity-100 color-primary-500"></i>
                                </div>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Mata Pelajaran</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <div class='icon-stack display-3 flex-shrink-0 m-auto'>
                                    <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                    <i class="fas fa-list-ul icon-stack-1x opacity-100 color-primary-500"></i>
                                </div>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Capaian Pembelajaran</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <div class='icon-stack display-3 flex-shrink-0 m-auto'>
                                    <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                    <i class="fas fa-users icon-stack-1x opacity-100 color-primary-500"></i>
                                </div>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Data Mengajar</span>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <a href="javascript:void(0);" class="btn-link font-weight-bold">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="content2">
                <div class="card mb-g shadow-5">
                    <div class="card-body">
                        <div class="align-items-center mt-5 mb-5">
                            <div class='icon-stack display-1 flex-shrink-0 d-block m-auto'>
                                <i class="fal fa-circle icon-stack-4x opacity-100 color-primary-400"></i>
                                <i class="fas fa-download icon-stack-1x opacity-100 color-primary-500"></i>
                            </div>
                            <div class="p-1 text-center">
                                <strong class="fw-900 fs-xxl color-primary-400">
                                    EKSPOR DATA MASTER
                                </strong>
                                <br>
                                Laporan Capaian Kompetensi Siswa
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-col>
    </main>
@endsection
