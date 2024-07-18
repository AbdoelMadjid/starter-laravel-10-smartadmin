@extends('inc.main')
@section('title', 'Paket Keahlian')
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
                'icon' => 'sitemap',
                'heading1' => 'Paket',
                'heading2' => 'Keahlian',
            ])
            @endcomponent
        </div>

        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h1>Edit Kompetensi Keahlian</h1>
            <form action="{{ route('kompetensi-keahlian.update', $kompetensiKeahlian->kode_paket) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="kode_paket">Kode Paket</label>
                    <input type="text" class="form-control" id="kode_paket" name="kode_paket"
                        value="{{ $kompetensiKeahlian->kode_paket }}" required>
                </div>
                <div class="form-group">
                    <label for="kode_bidang">Kode Bidang</label>
                    <select class="form-control" id="kode_bidang" name="kode_bidang" required>
                        @foreach ($bidangKeahlians as $bidang)
                            <option value="{{ $bidang->kode_bidang }}"
                                {{ $bidang->kode_bidang == $kompetensiKeahlian->kode_bidang ? 'selected' : '' }}>
                                {{ $bidang->nama_bidang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_program">Kode Program</label>
                    <select class="form-control" id="kode_program" name="kode_program" required>
                        @foreach ($programKeahlians as $program)
                            <option value="{{ $program->kode_program }}"
                                {{ $program->kode_program == $kompetensiKeahlian->kode_program ? 'selected' : '' }}>
                                {{ $program->nama_program }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" class="form-control" id="nama_paket" name="nama_paket"
                        value="{{ $kompetensiKeahlian->nama_paket }}" required>
                </div>
                <div class="form-group">
                    <label for="singkatan">Singkatan</label>
                    <input type="text" class="form-control" id="singkatan" name="singkatan"
                        value="{{ $kompetensiKeahlian->singkatan }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </main>
@endsection
