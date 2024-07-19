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
            'category_1' => 'Master',
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

        <form action="{{ route('tenaga_pendidik.update', $dataGuru) }}" method="POST">
            @csrf
            @method('PUT')
            <x-panel.show title="Default" subtitle="Example">
                <x-slot name="paneltoolbar">
                    <x-panel.tool-bar>
                        <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('tenaga_pendidik.index') }}">Kembali</a>
                        </div>
                    </x-panel.tool-bar>
                </x-slot>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control"
                        value="{{ old('nip', $dataGuru->nip) }}">
                </div>
                <div class="form-group">
                    <label for="gelardepan">Gelar Depan</label>
                    <input type="text" name="gelardepan" id="gelardepan" class="form-control"
                        value="{{ old('gelardepan', $dataGuru->gelardepan) }}">
                </div>
                <div class="form-group">
                    <label for="namalengkap">Nama Lengkap</label>
                    <input type="text" name="namalengkap" id="namalengkap" class="form-control"
                        value="{{ old('namalengkap', $dataGuru->namalengkap) }}" required>
                </div>
                <div class="form-group">
                    <label for="gelarbelakang">Gelar Belakang</label>
                    <input type="text" name="gelarbelakang" id="gelarbelakang" class="form-control"
                        value="{{ old('gelarbelakang', $dataGuru->gelarbelakang) }}">
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                        <option value="Laki-laki"
                            {{ old('jeniskelamin', $dataGuru->jeniskelamin) == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki</option>
                        <option value="Perempuan"
                            {{ old('jeniskelamin', $dataGuru->jeniskelamin) == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenisguru">Jenis Guru</label>
                    <select name="jenisguru" id="jenisguru" class="form-control" required>
                        <option value="Kepala Sekolah"
                            {{ old('jenisguru', $dataGuru->jenisguru) == 'Kepala Sekolah' ? 'selected' : '' }}>
                            Kepala Sekolah</option>
                        <option value="Produktif"
                            {{ old('jenisguru', $dataGuru->jenisguru) == 'Produktif' ? 'selected' : '' }}>
                            Produktif</option>
                        <option value="Umum" {{ old('jenisguru', $dataGuru->jenisguru) == 'Umum' ? 'selected' : '' }}>
                            Umum
                        </option>
                        <option value="BP/BK" {{ old('jenisguru', $dataGuru->jenisguru) == 'BP/BK' ? 'selected' : '' }}>
                            BP/BK
                        </option>
                        <option value="Tata Usaha"
                            {{ old('jenisguru', $dataGuru->jenisguru) == 'Tata Usaha' ? 'selected' : '' }}>
                            Tata Usaha</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" name="tempatlahir" id="tempatlahir" class="form-control"
                        value="{{ old('tempatlahir', $dataGuru->tempatlahir) }}">
                </div>
                <div class="form-group">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" id="tanggallahir" class="form-control"
                        value="{{ old('tanggallahir', $dataGuru->tanggallahir) }}">
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" name="agama" id="agama" class="form-control"
                        value="{{ old('agama', $dataGuru->agama) }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ old('email', $dataGuru->email) }}">
                </div>
                <div class="form-group">
                    <label for="nomorhp">Nomor HP</label>
                    <input type="text" name="nomorhp" id="nomorhp" class="form-control"
                        value="{{ old('nomorhp', $dataGuru->nomorhp) }}">
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="text" name="photo" id="photo" class="form-control"
                        value="{{ old('photo', $dataGuru->photo) }}">
                </div>
                <div class="form-group">
                    <label for="motto">Motto</label>
                    <textarea name="motto" id="motto" class="form-control">{{ old('motto', $dataGuru->motto) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="alamat_dusun">Alamat Dusun</label>
                    <input type="text" name="alamat_dusun" id="alamat_dusun" class="form-control"
                        value="{{ old('alamat_dusun', $dataGuru->alamat_dusun) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_jalan">Alamat Jalan</label>
                    <input type="text" name="alamat_jalan" id="alamat_jalan" class="form-control"
                        value="{{ old('alamat_jalan', $dataGuru->alamat_jalan) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_norumah">Alamat Nomor Rumah</label>
                    <input type="text" name="alamat_norumah" id="alamat_norumah" class="form-control"
                        value="{{ old('alamat_norumah', $dataGuru->alamat_norumah) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_rt">Alamat RT</label>
                    <input type="text" name="alamat_rt" id="alamat_rt" class="form-control"
                        value="{{ old('alamat_rt', $dataGuru->alamat_rt) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_rw">Alamat RW</label>
                    <input type="text" name="alamat_rw" id="alamat_rw" class="form-control"
                        value="{{ old('alamat_rw', $dataGuru->alamat_rw) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_desa">Alamat Desa</label>
                    <input type="text" name="alamat_desa" id="alamat_desa" class="form-control"
                        value="{{ old('alamat_desa', $dataGuru->alamat_desa) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_kec">Alamat Kecamatan</label>
                    <input type="text" name="alamat_kec" id="alamat_kec" class="form-control"
                        value="{{ old('alamat_kec', $dataGuru->alamat_kec) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_kab">Alamat Kabupaten</label>
                    <input type="text" name="alamat_kab" id="alamat_kab" class="form-control"
                        value="{{ old('alamat_kab', $dataGuru->alamat_kab) }}">
                </div>
                <div class="form-group">
                    <label for="alamat_kodepos">Alamat Kode Pos</label>
                    <input type="text" name="alamat_kodepos" id="alamat_kodepos" class="form-control"
                        value="{{ old('alamat_kodepos', $dataGuru->alamat_kodepos) }}">
                </div>
                <div class="form-group">
                    <label for="aktif">Status Aktif</label>
                    <select name="aktif" id="aktif" class="form-control" required>
                        <option value="Aktif" {{ old('aktif', $dataGuru->aktif) == 'Aktif' ? 'selected' : '' }}>Aktif
                        </option>
                        <option value="Tidak Aktif"
                            {{ old('aktif', $dataGuru->aktif) == 'Tidak Aktif' ? 'selected' : '' }}>
                            Tidak
                            Aktif</option>
                        <option value="Pensiun" {{ old('aktif', $dataGuru->aktif) == 'Pensiun' ? 'selected' : '' }}>
                            Pensiun
                        </option>
                        <option value="Pindah" {{ old('aktif', $dataGuru->aktif) == 'Pindah' ? 'selected' : '' }}>Pindah
                        </option>
                        <option value="Keluar" {{ old('aktif', $dataGuru->aktif) == 'Keluar' ? 'selected' : '' }}>Keluar
                        </option>
                    </select>
                </div>
                <x-slot name="panelcontentfoot">
                    <x-button type="submit" color="primary" :label="__('Update')" class="ml-auto" />
                </x-slot>
            </x-panel.show>
        </form>
    </main>
@endsection
