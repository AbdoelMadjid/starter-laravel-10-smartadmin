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
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Daftar <span class="fw-300"><i>Guru dan Tata Usaha</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <a href="{{ route('biodata_ptk.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead>
                                    <tr>
                                        <th>ID Guru</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($biodata_ptks as $biodata_ptk)
                                        <tr>
                                            <td>{{ $biodata_ptk->id_guru }}</td>
                                            <td>{{ $biodata_ptk->namalengkap }}</td>
                                            <td>{{ $biodata_ptk->jeniskelamin }}</td>
                                            <td>{{ $biodata_ptk->email }}</td>
                                            <td>
                                                <a href="{{ route('biodata_ptk.show', $biodata_ptk->id_guru) }}"
                                                    class="btn btn-info btn-sm"><i class="fal fa-eye"></i></a>
                                                <a href="{{ route('biodata_ptk.edit', $biodata_ptk->id_guru) }}"
                                                    class="btn btn-primary btn-sm"><i
                                                        class="fal fa-money-check-edit"></i></a>
                                                <!-- Form untuk delete jika diperlukan -->
                                                <form action="{{ route('biodata_ptk.destroy', $biodata_ptk->id_guru) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                            class="fal fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID Guru</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- datatable end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    {{-- <!--
    datatble responsive bundle contains:
    + jquery.dataTables.js
    + dataTables.bootstrap4.js
    + dataTables.autofill.js
    + dataTables.buttons.js
    + buttons.bootstrap4.js
    + buttons.html5.js
    + buttons.print.js
    + buttons.colVis.js
    + dataTables.colreorder.js
    + dataTables.fixedcolumns.js
    + dataTables.fixedheader.js
    + dataTables.keytable.js
    + dataTables.responsive.js
    + dataTables.rowgroup.js
    + dataTables.rowreorder.js
    + dataTables.scroller.js
    + dataTables.select.js
    + datatables.styles.app.js
    + datatables.styles.buttons.app.js
    --> --}}
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

        @if (session('success'))
            toastr.success("{{ session('success') }}")
        @endif
        @if (session('error'))
            toastr.error("{{ session('error') }}")
        @endif
    </script>
@endsection
