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
        <form action="{{ route('biodata_ptk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-panel.show title="Tambah" subtitle="PTK">
                <x-slot name="paneltoolbar">
                    <x-panel.tool-bar class="ml-2">
                        <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('biodata_ptk.index') }}">Kembali</a>
                            {{--
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        --}}
                        </div>
                    </x-panel.tool-bar>
                </x-slot>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') }}">
                </div>

                <div class="form-group">
                    <label for="gelardepan">Gelar Depan</label>
                    <input type="text" class="form-control" id="gelardepan" name="gelardepan"
                        value="{{ old('gelardepan') }}">
                </div>

                <div class="form-group">
                    <label for="namalengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                        value="{{ old('namalengkap') }}" required>
                </div>

                <div class="form-group">
                    <label for="gelarbelakang">Gelar Belakang</label>
                    <input type="text" class="form-control" id="gelarbelakang" name="gelarbelakang"
                        value="{{ old('gelarbelakang') }}" required>
                </div>

                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jenisguru">Jenis Guru</label>
                    <select class="form-control" id="jenisguru" name="jenisguru" required>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Produktif">Produktif</option>
                        <option value="Umum">Umum</option>
                        <option value="BP/BK">BP/BK</option>
                        <option value="Tata Usaha">Tata Usaha</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"
                        value="{{ old('tempatlahir') }}" required>
                </div>

                <div class="form-group">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir"
                        value="{{ old('tanggallahir') }}" required>
                </div>

                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="{{ old('agama') }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="nomorhp">Nomor HP</label>
                    <input type="text" class="form-control" id="nomorhp" name="nomorhp"
                        value="{{ old('nomorhp') }}" required>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>

                <div class="form-group">
                    <label for="motto">Motto</label>
                    <textarea class="form-control" id="motto" name="motto">{{ old('motto') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="alamat_dusun">Alamat Dusun</label>
                    <input type="text" class="form-control" id="alamat_dusun" name="alamat_dusun"
                        value="{{ old('alamat_dusun') }}">
                </div>

                <div class="form-group">
                    <label for="alamat_jalan">Alamat Jalan</label>
                    <input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan"
                        value="{{ old('alamat_jalan') }}">
                </div>

                <div class="form-group">
                    <label for="alamat_norumah">Alamat No Rumah</label>
                    <input type="text" class="form-control" id="alamat_norumah" name="alamat_norumah"
                        value="{{ old('alamat_norumah') }}">
                </div>

                <div class="form-group">
                    <label for="alamat_rt">Alamat RT</label>
                    <input type="text" class="form-control" id="alamat_rt" name="alamat_rt"
                        value="{{ old('alamat_rt') }}">
                </div>

                <div class="form-group">
                    <label for="alamat_rw">Alamat RW</label>
                    <input type="text" class="form-control" id="alamat_rw" name="alamat_rw"
                        value="{{ old('alamat_rw') }}">
                </div>

                <div class="form-group">
                    <label for="alamat_desa">Alamat Desa</label>
                    <input type="text" class="form-control" id="alamat_desa" name="alamat_desa"
                        value="{{ old('alamat_desa') }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat_kec">Alamat Kecamatan</label>
                    <input type="text" class="form-control" id="alamat_kec" name="alamat_kec"
                        value="{{ old('alamat_kec') }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat_kab">Alamat Kabupaten</label>
                    <input type="text" class="form-control" id="alamat_kab" name="alamat_kab"
                        value="{{ old('alamat_kab') }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat_kodepos">Alamat Kode Pos</label>
                    <input type="text" class="form-control" id="alamat_kodepos" name="alamat_kodepos"
                        value="{{ old('alamat_kodepos') }}">
                </div>

                <div class="form-group">
                    <label for="aktif">Status Aktif</label>
                    <select class="form-control" id="aktif" name="aktif" required>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                        <option value="Pensiun">Pensiun</option>
                        <option value="Pindah">Pindah</option>
                        <option value="Keluar">Keluar</option>
                    </select>
                </div>
                <x-slot name="panelcontentfoot">
                    <x-button type="submit" color="primary" :label="__('Update')" class="ml-auto" />
                </x-slot>
            </x-panel.show>
        </form>
    </main>
@endsection
