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
            <x-slot name="tagpanel">
                isi-tag-panel
            </x-slot>
            <div class="card">
                <div class="card-body">
                    <p><strong>ID Guru:</strong> {{ $dataGuru->id_guru }}</p>
                    <p><strong>NIP:</strong> {{ $dataGuru->nip }}</p>
                    <p><strong>Gelar Depan:</strong> {{ $dataGuru->gelardepan }}</p>
                    <p><strong>Nama Lengkap:</strong> {{ $dataGuru->namalengkap }}</p>
                    <p><strong>Gelar Belakang:</strong> {{ $dataGuru->gelarbelakang }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $dataGuru->jeniskelamin }}</p>
                    <p><strong>Jenis Guru:</strong> {{ $dataGuru->jenisguru }}</p>
                    <p><strong>Tempat Lahir:</strong> {{ $dataGuru->tempatlahir }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $dataGuru->tanggallahir }}</p>
                    <p><strong>Agama:</strong> {{ $dataGuru->agama }}</p>
                    <p><strong>Email:</strong> {{ $dataGuru->email }}</p>
                    <p><strong>Nomor HP:</strong> {{ $dataGuru->nomorhp }}</p>
                    <p><strong>Photo:</strong> {{ $dataGuru->photo }}</p>
                    <p><strong>Motto:</strong> {{ $dataGuru->motto }}</p>
                    <p><strong>Alamat Dusun:</strong> {{ $dataGuru->alamat_dusun }}</p>
                    <p><strong>Alamat Jalan:</strong> {{ $dataGuru->alamat_jalan }}</p>
                    <p><strong>Alamat Nomor Rumah:</strong> {{ $dataGuru->alamat_norumah }}</p>
                    <p><strong>Alamat RT:</strong> {{ $dataGuru->alamat_rt }}</p>
                    <p><strong>Alamat RW:</strong> {{ $dataGuru->alamat_rw }}</p>
                    <p><strong>Alamat Desa:</strong> {{ $dataGuru->alamat_desa }}</p>
                    <p><strong>Alamat Kecamatan:</strong> {{ $dataGuru->alamat_kec }}</p>
                    <p><strong>Alamat Kabupaten:</strong> {{ $dataGuru->alamat_kab }}</p>
                    <p><strong>Alamat Kode Pos:</strong> {{ $dataGuru->alamat_kodepos }}</p>
                    <p><strong>Status Aktif:</strong> {{ $dataGuru->aktif }}</p>
                    <a href="{{ route('tenaga_pendidik.edit', $dataGuru) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('tenaga_pendidik.destroy', $dataGuru) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('tenaga_pendidik.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </x-panel.show>
    </main>
@endsection
