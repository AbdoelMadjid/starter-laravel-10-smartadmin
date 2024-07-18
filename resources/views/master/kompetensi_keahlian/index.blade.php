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
            <h1>Kompetensi Keahlian</h1>
            <a href="{{ route('kompetensi-keahlian.create') }}" class="btn btn-primary">Create New</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Kode Paket</th>
                        <th>Kode Bidang</th>
                        <th>Kode Program</th>
                        <th>Nama Paket</th>
                        <th>Singkatan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kompetensiKeahlians as $kompetensiKeahlian)
                        <tr>
                            <td>{{ $kompetensiKeahlian->kode_paket }}</td>
                            <td>{{ $kompetensiKeahlian->kode_bidang }}</td>
                            <td>{{ $kompetensiKeahlian->kode_program }}</td>
                            <td>{{ $kompetensiKeahlian->nama_paket }}</td>
                            <td>{{ $kompetensiKeahlian->singkatan }}</td>
                            <td>
                                <a href="{{ route('kompetensi-keahlian.edit', $kompetensiKeahlian->kode_paket) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('kompetensi-keahlian.destroy', $kompetensiKeahlian->kode_paket) }}"
                                    method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
