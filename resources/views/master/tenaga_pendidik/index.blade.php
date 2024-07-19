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
                    <a href="{{ route('tenaga_pendidik.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                </x-panel.tool-bar>
            </x-slot>
            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>ID Guru</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenis Guru</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataGurus as $dataGuru)
                        <tr>
                            <td>{{ $dataGuru->id_guru }}</td>
                            <td>{{ $dataGuru->namalengkap }}</td>
                            <td>{{ $dataGuru->jeniskelamin }}</td>
                            <td>{{ $dataGuru->jenisguru }}</td>
                            <td>{{ $dataGuru->email }}</td>
                            <td>
                                <a href="{{ route('tenaga_pendidik.show', $dataGuru->id_guru) }}"
                                    class="btn btn-info">Detail</a>
                                <a href="{{ route('tenaga_pendidik.edit', $dataGuru->id_guru) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('tenaga_pendidik.destroy', $dataGuru->id_guru) }}" method="POST"
                                    style="display:inline-block;">
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
