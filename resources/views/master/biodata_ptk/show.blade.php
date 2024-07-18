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
                        <a class="dropdown-item" href="{{ route('biodata_ptk.index') }}">Kembali</a>
                    </div>
                </x-panel.tool-bar>
            </x-slot>
            <x-slot name="tagpanel">
                isi-tag-panel
            </x-slot>
            <div>
                <p><strong>ID Guru:</strong> {{ $biodataPtk->id_guru }}</p>
                <p><strong>NIP:</strong> {{ $biodataPtk->nip }}</p>
                <p><strong>Gelar Depan:</strong> {{ $biodataPtk->gelardepan }}</p>
                <p><strong>Nama Lengkap:</strong> {{ $biodataPtk->namalengkap }}</p>
                <p><strong>Gelar Belakang:</strong> {{ $biodataPtk->gelarbelakang }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $biodataPtk->jeniskelamin }}</p>
                <p><strong>Jenis Guru:</strong> {{ $biodataPtk->jenisguru }}</p>
                <p><strong>Tempat Lahir:</strong> {{ $biodataPtk->tempatlahir }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $biodataPtk->tanggallahir }}</p>
                <p><strong>Agama:</strong> {{ $biodataPtk->agama }}</p>
                <p><strong>Email:</strong> {{ $biodataPtk->email }}</p>
                <p><strong>Nomor HP:</strong> {{ $biodataPtk->nomorhp }}</p>
                @if ($biodataPtk->photo)
                    <p><strong>Photo:</strong></p>
                    <img src="{{ asset('storage/' . $biodataPtk->photo) }}" alt="Photo"
                        style="max-width: 200px; margin-top: 10px;">
                @endif
                <p><strong>Motto:</strong> {{ $biodataPtk->motto }}</p>
                <p><strong>Alamat:</strong> {{ $biodataPtk->alamat_dusun }}, {{ $biodataPtk->alamat_jalan }} No.
                    {{ $biodataPtk->alamat_norumah }}, RT {{ $biodataPtk->alamat_rt }}, RW {{ $biodataPtk->alamat_rw }},
                    {{ $biodataPtk->alamat_desa }}, {{ $biodataPtk->alamat_kec }}, {{ $biodataPtk->alamat_kab }}
                    {{ $biodataPtk->alamat_kodepos }}</p>
                <p><strong>Status Aktif:</strong> {{ $biodataPtk->aktif }}</p>
            </div>
        </x-panel.show>
    </main>
@endsection
