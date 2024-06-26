@extends('admin.inc.main')
@section('title', 'Tahun Ajaran')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Kurikulum',
        ])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'calendar-alt',
                'heading1' => 'Tahun',
                'heading2' => 'Ajaran',
            ])
            @endcomponent
        </div>
        <x-col :size1="4" :size2="8">
            <x-slot name='content1'>
                <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                    <h3 class="mb-g">
                        Hi Master Abdul Madjid,
                    </h3>
                    <p>
                        Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking
                        around
                        the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey,
                        we have
                        taken each piece of praise and criticism to heart to scope out our plans for SmartAdmin. All
                        feedback will
                        be used to make your favorite theme that much better, but these were some of the highlights.
                    </p>
                    <p>
                        Sincerely,<br>
                        The SmartAdmin Team<br>
                    </p>
                </div>
            </x-slot>
            <x-slot name='content2'>
                <div class="card mb-g shadow-5">
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title mb-0 fs-xl fw-700"> <i class="fal fa-calendar-alt color-primary-700"></i>
                            Tahun Ajaran
                        </div>
                        <x-button color="primary" size="xs" pills :label="__('Opsion')" class="ml-auto" />
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
                            <table class="table table-sm table-bordered table-striped table-hover m-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Aktif</th>
                                        <th>Ganjil</th>
                                        <th>Genap</th>
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
        </x-col>

    </main>
@endsection
