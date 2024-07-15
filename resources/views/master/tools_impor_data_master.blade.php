@extends('inc.main')
@section('title', 'Impor Data Master')
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
                'icon' => 'file-import',
                'heading1' => 'Impor Data',
                'heading2' => 'Master',
            ])
            @endcomponent
        </div>
        <x-col size1=3 size2=9>
            <x-slot name="content1">
                <div class="card mb-g shadow-5">
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl fw-700">
                                    <i class="fal fa-ballot-check"></i> MAIN MENU
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2">
                                <x-button href="" color="primary" :label="__('Tenaga Pendidik')" block />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2">
                                <x-button href="" color="primary" :label="__('Mata Pelajaran')" block />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2">
                                <x-button href="" color="primary" :label="__('Capaian Pembelajaran')" block />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2">
                                <x-button href="" color="primary" :label="__('Peserta Didik')" block />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2">
                                <x-button href="" color="primary" :label="__('Perkelas')" block />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <a href="/dashboard" class="btn-link font-weight-bold">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="content2">
                <div class="card mb-2 shadow-5">
                    <div class="card-body">
                        <div class="align-items-center mt-5 mb-5">
                            <div class='icon-stack display-1 flex-shrink-0 d-block m-auto'>
                                <i class="fal fa-circle icon-stack-4x opacity-100 color-primary-400"></i>
                                <i class="fas fa-upload icon-stack-1x opacity-100 color-primary-500"></i>
                            </div>
                            <div class="p-1 text-center">
                                <strong class="fw-900 fs-xxl color-primary-400">
                                    IMPOR DATA MASTER
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
