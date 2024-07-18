@extends('inc.main')
@section('title', 'Tenaga Pendidik')
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
                'icon' => 'user',
                'heading1' => 'Tenaga',
                'heading2' => 'Pendidik',
            ])
            @endcomponent
        </div>
        <x-panel.show title="Daftar" subtitle="Guru dan Tata Usaha">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar>
                    <a href="{{ route('biodata_ptk.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                </x-panel.tool-bar>
            </x-slot>
            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>ID Guru</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenis Guru</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata_ptks as $biodataPtk)
                        <tr>
                            <td>{{ $biodataPtk->id_guru }}</td>
                            <td>{{ $biodataPtk->namalengkap }}</td>
                            <td>{{ $biodataPtk->email }}</td>
                            <td>{{ $biodataPtk->jeniskelamin }}</td>
                            <td>{{ $biodataPtk->jenisguru }}</td>
                            <td>
                                <a href="{{ route('biodata_ptk.show', $biodataPtk->id_guru) }}"
                                    class="btn btn-info">Lihat</a>
                                <a href="{{ route('biodata_ptk.edit', $biodataPtk->id_guru) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('biodata_ptk.destroy', $biodataPtk->id_guru) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
