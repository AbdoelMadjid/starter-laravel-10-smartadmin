@extends('inc.main')
@section('title', 'App Profile')
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
                'icon' => 'cog',
                'heading1' => 'App Profile',
            ])
                <div class="subheader-block d-lg-flex align-items-center">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Selamat Datang</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-primary-500">
                            {{ auth()->user()->name }}
                        </span>
                    </div>
                </div>
                <div
                    class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Status</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-danger-500">
                            {{ auth()->user()->role }}
                        </span>
                    </div>
                </div>
            @endcomponent
        </div>
        <x-panel.show title="Profile" subtitle="Application">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar class="ml-2">
                    <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fal fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                        <a class="dropdown-item" href="/dashboard">Kembali</a>
                        {{--
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        --}}
                    </div>
                </x-panel.tool-bar>
            </x-slot>
            <x-col size1=6 size2=6>
                <x-slot name="content1">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $appProfile->app_nama }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{ $appProfile->app_deskripsi }}</td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td>{{ $appProfile->app_tahun }}</td>
                        </tr>
                        <tr>
                            <th>Pengembang</th>
                            <td>{{ $appProfile->app_pengembang }}</td>
                        </tr>
                    </table>
                </x-slot>
                <table class="table table-bordered">
                    <tr>
                        <th>Icon</th>
                        <td><img src="{{ asset('admin/img/' . $appProfile->app_icon) }}" alt="Icon" width="50">
                        </td>
                    </tr>
                    <tr>
                        <th>Logo</th>
                        <td><img src="{{ asset('admin/img/' . $appProfile->app_logo) }}" alt="Logo" width="50">
                        </td>
                    </tr>
                </table>
                <x-slot name="Content2">
                </x-slot>
            </x-col>
            <x-slot name="panelcontentfoot">
                <x-button href="{{ route('app_profiles.edit') }}" size="sm" :label="__('Edit')" class="ml-auto" />
            </x-slot>
        </x-panel.show>
    </main>
@endsection
@section('pages-script')

@endsection
