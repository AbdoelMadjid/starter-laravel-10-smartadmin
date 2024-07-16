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

        <x-col size1=12>
            <x-slot name="content1">
                <div class="card mb-2 shadow-5">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl fw-700">
                                    <i class="fal fa-ballot-check"></i> MAIN MENU
                                </h2>
                            </div>
                            <form action="{{ route('app_profiles.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <x-col size1=6 size2=6>
                                    <x-slot name="content1">
                                        <div class="form-group">
                                            <label>Nama:</label>
                                            <input type="text" name="app_nama" class="form-control"
                                                value="{{ $appProfile->app_nama }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi:</label>
                                            <textarea name="app_deskripsi" class="form-control" required>{{ $appProfile->app_deskripsi }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun:</label>
                                            <input type="number" name="app_tahun" class="form-control"
                                                value="{{ $appProfile->app_tahun }}" required min="1900"
                                                max="{{ date('Y') + 1 }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Pengembang:</label>
                                            <input type="text" name="app_pengembang" class="form-control"
                                                value="{{ $appProfile->app_pengembang }}" required>
                                        </div>
                                    </x-slot>
                                    <x-slot name="content2">
                                        <div class="form-group">
                                            <x-col size1=6 size2=6>
                                                <x-slot name="content1">
                                                    <label>Icon:</label>
                                                    <input type="file" name="app_icon" class="form-control">
                                                </x-slot>
                                                <x-slot name="content2">
                                                    <img src="{{ asset('admin/img/' . $appProfile->app_icon) }}"
                                                        alt="Icon" width="100">
                                                </x-slot>
                                            </x-col>
                                        </div>
                                        <div class="form-group">
                                            <x-col size1=6 size2=6>
                                                <x-slot name="content1">
                                                    <label>Logo:</label>
                                                    <input type="file" name="app_logo" class="form-control">
                                                </x-slot>
                                                <x-slot name="content2">
                                                    <img src="{{ asset('admin/img/' . $appProfile->app_logo) }}"
                                                        alt="Logo" width="100" class='txt-center'>
                                                </x-slot>
                                            </x-col>
                                        </div>
                                        <hr>
                                        <div class="height-8 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                            <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1"
                                                data-toggle="tooltip" data-original-title="More options"
                                                data-placement="top">
                                            </a>

                                            <button type="submit" class="btn btn-info shadow-0 ml-auto">Update</button>
                                        </div>
                                        {{--
                                            <div class="ml-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        --}}
                                    </x-slot>
                                </x-col>
                            </form>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-col>
    </main>
@endsection
@section('pages-script')

@endsection
