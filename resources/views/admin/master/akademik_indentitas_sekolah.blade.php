@extends('admin.inc.main')
@section('title', 'Identitas Sekolah')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Akademik',
        ])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'university',
                'heading1' => 'Identitas',
                'heading2' => 'Sekolah',
            ])
            @endcomponent
        </div>
        <x-col :size1="4" :size2="8">
            <x-slot name='content1'>
                <div class="card mb-g shadow-5">
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title mb-0 fs-xl fw-700"> <i class="fal fa-university color-primary-700"></i>
                            Identitas Sekolah
                        </div>
                        <x-button color="primary" icon="edit" size="xs" pills :label="__('Edit')" class="ml-auto" />
                        {{-- <button class="btn btn-icon btn-xs ml-auto fs-xl" data-toggle="dropdown">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <button class="dropdown-item">
                                Option 1
                            </button>
                            <button class="dropdown-item">
                                Option 2
                            </button>
                            <div class="dropdown-divider m-0"></div>
                            <button class="dropdown-item">
                                Refresh
                            </button>
                        </div> --}}
                    </div>
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <div class="align-items-center mt-5 mb-5">
                                    <div class='icon-stack display-1 flex-shrink-0 d-block m-auto'>
                                        <i class="fal fa-circle icon-stack-4x opacity-100 color-primary-400"></i>
                                        <i class="fas fa-download icon-stack-1x opacity-100 color-primary-500"></i>
                                    </div>
                                    <div class="p-1 text-center">
                                        <strong class="fw-900 fs-xxl color-primary-400">
                                            SMKN 1 KADIPATEN
                                        </strong>
                                        <br>
                                        Laporan Capaian Kompetensi Siswa
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="table-responsive m-4">
                                    <table class="table table-clean table-sm align-self-end"
                                        style='margin: 0 auto;width:100%;border-collapse:collapse;'>
                                        <tbody>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>Negeri</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Sekolah</td>
                                                <td>:</td>
                                                <td>SMKN 1 Kadipaten</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>Negeri</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>Negeri</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>Negeri</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name='content2'>
                <div class="card m-auto border shadow-5">
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title mb-0 fs-xl fw-700"> <i class="fal fa-user color-primary-700"></i>
                            Kepala Sekolah
                        </div>
                        <x-button color="primary" icon="plus-square" size="xs" pills :label="__('Tambah')"
                            class="ml-auto" />
                    </div>
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <table class="table table-sm table-bordered table-striped table-hover m-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <th>Nama Lengkap</th>
                                        <th>Aktif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2021-2022</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>2022-2023</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>2025-2024</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="p-3">

                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name='content3'>

            </x-slot>
        </x-col>
    </main>
@endsection
