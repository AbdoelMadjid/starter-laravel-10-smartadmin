@extends('inc.main')
@section('title', 'Paket Keahlian')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/datagrid/datatables/datatables.bundle.css">
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

        <x-panel.show title="Daftar" subtitle="Kompetensi Keahlian">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar>
                    <a href="{{ route('kompetensi-keahlian.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                </x-panel.tool-bar>
            </x-slot>
            <!-- datatable start -->
            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
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
                            <td>{{ $kompetensiKeahlian->bidangKeahlian->nama_bidang }}</td>
                            <td>{{ $kompetensiKeahlian->programKeahlian->nama_program }}</td>
                            <td>{{ $kompetensiKeahlian->nama_paket }}</td>
                            <td>{{ $kompetensiKeahlian->singkatan }}</td>
                            <td>
                                <a href="{{ route('kompetensi-keahlian.edit', $kompetensiKeahlian->kode_paket) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm"
                                    onclick="confirmDelete({{ $kompetensiKeahlian->kode_paket }})">Delete</button>
                                <form id="delete-form-{{ $kompetensiKeahlian->kode_paket }}"
                                    action="{{ route('kompetensi-keahlian.destroy', $kompetensiKeahlian->kode_paket) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- datatable end -->
        </x-panel.show>
    </main>
@endsection
@section('pages-script')
    <script>
        function confirmDelete(id) {
            bootbox.confirm({
                message: "Apakah yakin akan di hapus kompetensi keahlian ini?",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-danger'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-secondary'
                    }
                },
                callback: function(result) {
                    if (result) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                }
            });
        }
    </script>
    <script src="/admin/js/datagrid/datatables/datatables.bundle.js"></script>
    <script>
        /* demo scripts for change table color */
        /* change background */
        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true
            });

            $('.js-thead-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
            });

            $('.js-tbody-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
            });

        });
    </script>
@endsection
