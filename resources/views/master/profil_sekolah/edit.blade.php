@extends('inc.main')
@section('title', 'Identitas Sekolah')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Akademik',
        ])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'university',
                'heading1' => 'Identitas',
                'heading2' => 'Sekolah',
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
        <form action="{{ route('profil-sekolah.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-panel.show title="Edit" subtitle="Profil Sekolah">
                <x-slot name="paneltoolbar">
                    <x-panel.tool-bar class="ml-2">
                        <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <a class="dropdown-item" href="/akademik/profil-sekolah">Kembali</a>
                            {{--
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        --}}
                        </div>
                    </x-panel.tool-bar>
                </x-slot>
                <x-col size1=4 size2=4 size3=4>
                    <x-slot name="content1">
                        <div class="form-row form-group">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="nm_sekolah">Nama Sekolah</label>
                                <input type="text" class="form-control" name="nm_sekolah"
                                    value="{{ $profilSekolah->nm_sekolah }}" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="status">Status</label>
                                <select class="form-control" name="status" required>
                                    <option value="Negeri" {{ $profilSekolah->status == 'Negeri' ? 'selected' : '' }}>
                                        Negeri</option>
                                    <option value="Swasta" {{ $profilSekolah->status == 'Swasta' ? 'selected' : '' }}>
                                        Swasta</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="alamat_telepon">Telepon</label>
                                <input type="text" class="form-control" name="alamat_telepon"
                                    value="{{ $profilSekolah->alamat_telepon }}" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="alamat_website">Website</label>
                                <input type="text" class="form-control" name="alamat_website"
                                    value="{{ $profilSekolah->alamat_website }}" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="alamat_email">Email</label>
                                <input type="text" class="form-control" name="alamat_email"
                                    value="{{ $profilSekolah->alamat_email }}" required>
                            </div>

                        </div>
                    </x-slot>
                    <x-slot name="content2">
                        <div class="form-row form-group">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="alamat_blok">Jalan/Blok</label>
                                <input type="text" class="form-control" name="alamat_blok"
                                    value="{{ $profilSekolah->alamat_blok }}" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label" for="alamat_no">Nomor</label>
                                <input type="text" class="form-control" name="alamat_no"
                                    value="{{ $profilSekolah->alamat_no }}" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label" for="alamat_rt">RT</label>
                                <input type="text" class="form-control" name="alamat_rt"
                                    value="{{ $profilSekolah->alamat_rt }}" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label" for="alamat_rw">RW</label>
                                <input type="text" class="form-control" name="alamat_rw"
                                    value="{{ $profilSekolah->alamat_rw }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="alamat_desa">Desa</label>
                                <input type="text" class="form-control" name="alamat_desa"
                                    value="{{ $profilSekolah->alamat_desa }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="alamat_kec">Kecamatan</label>
                                <input type="text" class="form-control" name="alamat_kec"
                                    value="{{ $profilSekolah->alamat_kec }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="alamat_kab">Kabupaten</label>
                                <input type="text" class="form-control" name="alamat_kab"
                                    value="{{ $profilSekolah->alamat_kab }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="alamat_provinsi">Provinsi</label>
                                <input type="text" class="form-control" name="alamat_provinsi"
                                    value="{{ $profilSekolah->alamat_provinsi }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="alamat_kodepos">Kode Pos</label>
                                <input type="text" class="form-control" name="alamat_kodepos"
                                    value="{{ $profilSekolah->alamat_kodepos }}" required>
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="content3">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="logo_sekolah">Logo Sekolah</label>
                            <input type="file" class="form-control-file" name="logo_sekolah">
                            <br>
                            <img src="{{ asset('admin/img/' . $profilSekolah->logo_sekolah) }}" alt="Logo"
                                width="250">
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
@section('pages-script')

@endsection
