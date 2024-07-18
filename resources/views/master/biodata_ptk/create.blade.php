@extends('inc.main')
@section('title', 'Tenaga Pendidik')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Admin',
            'category_2' => 'Akademik',
        ])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'user',
                'heading1' => 'Tenaga',
                'heading2' => 'Pendidik',
            ])
            @endcomponent
        </div>
        <form action="{{ route('biodata_ptk.store') }}" method="POST">
            @csrf
            <x-panel.show title="Tambah" subtitle="PTK">
                <x-slot name="paneltoolbar">
                    <x-panel.tool-bar class="ml-2">
                        <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <a class="dropdown-item" href="/akademik/biodata_ptk">Kembali</a>
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
                        <div class="form-row form-group">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="gelardepan">Gelar Depan:</label>
                                <input type="text" class="form-control" id="gelardepan" name="gelardepan" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="namalengkap">Nama Lengkap:</label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="gelarbelakang">Gelar Belakang:</label>
                                <input type="text" class="form-control" id="gelarbelakang" name="gelarbelakang" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="jeniskelamin">Jenis Kelamin:</label>
                                <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="nomorhp">Nomor HP:</label>
                                <input type="text" class="form-control" id="nomorhp" name="nomorhp" required>
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="content2">
                        <div class="form-row form-group">

                        </div>
                    </x-slot>
                </x-col>
                <x-slot name="panelcontentfoot">
                    <x-button type="submit" color="primary" :label="__('Update')" class="ml-auto" />
                </x-slot>
            </x-panel.show>
        </form>
    </main>
@endsection
