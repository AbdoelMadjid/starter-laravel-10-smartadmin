@extends('inc.main')
@section('title', 'Backup Database')
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
                'icon' => 'database',
                'heading1' => 'Backup',
                'heading2' => 'Database',
            ])
            @endcomponent
        </div>

        <x-panel.show title="Daftar" subtitle="Tabel DB">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar class="ml-2">
                    <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fal fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                        <a class="dropdown-item" href="/dashboard">Kembali</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </x-panel.tool-bar>
            </x-slot>
            <div class="align-items-center mt-5 mb-5">
                <div class='icon-stack display-1 flex-shrink-0 d-block m-auto'>
                    <i class="fal fa-circle icon-stack-4x opacity-100 color-primary-400"></i>
                    <i class="fas fa-cogs icon-stack-1x opacity-100 color-primary-500"></i>
                </div>
                <div class="p-1 text-center">
                    <strong class="fw-900 fs-xxl color-primary-400">
                        Under Conctruction
                    </strong>
                    <br>
                    Laporan Capaian Kompetensi Siswa
                </div>
            </div>
        </x-panel.show>

    </main>
@endsection
