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
            @endcomponent
        </div>
        <form action="{{ route('app_profiles.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-panel.show title="Edit" subtitle=" Profile Application">
                <x-slot name="paneltoolbar">
                    <x-panel.tool-bar class="ml-2">
                        <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <a class="dropdown-item" href="/tools/app_profiles">Kembali</a>
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
                        <table class="table table-clean">
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td><input type="text" name="app_nama" class="form-control"
                                        value="{{ $appProfile->app_nama }}" required></td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>:</td>
                                <td>
                                    <textarea name="app_deskripsi" class="form-control" required>{{ $appProfile->app_deskripsi }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>:</td>
                                <td><input type="number" name="app_tahun" class="form-control"
                                        value="{{ $appProfile->app_tahun }}" required min="1900"
                                        max="{{ date('Y') + 1 }}"></td>
                            </tr>
                            <tr>
                                <th>Pengembang</th>
                                <td>:</td>
                                <td><input type="text" name="app_pengembang" class="form-control"
                                        value="{{ $appProfile->app_pengembang }}" required></td>
                            </tr>
                        </table>
                    </x-slot>
                    <table class="table table-clean">
                        <tr>
                            <th>Icon</th>
                            <td>:</td>
                            <td><input type="file" name="app_icon" class="form-control"></td>
                            <td><img src="{{ asset('admin/img/' . $appProfile->app_icon) }}" alt="Icon" width="50">
                            </td>
                        </tr>
                        <tr>
                            <th>Logo</th>
                            <td>:</td>
                            <td><input type="file" name="app_logo" class="form-control"></td>
                            <td style="align-content: center"><img src="{{ asset('admin/img/' . $appProfile->app_logo) }}"
                                    alt="Logo" width="50">
                            </td>
                        </tr>
                    </table>
                    <x-slot name="Content2">
                    </x-slot>
                </x-col>
                <x-slot name="panelcontentfoot">
                    <x-button type="submit" color="primary" :label="__('Update')" class="ml-auto" />
                </x-slot>
            </x-panel.show>
        </form>
    </main>
@endsection
@section('pages-script')

@endsection
