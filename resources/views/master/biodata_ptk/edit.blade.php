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
                <h2>Edit Biodata PTK</h2>
                <form action="{{ route('biodata_ptk.update', $biodata_ptk->id_guru) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="namalengkap">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                            value="{{ $biodata_ptk->namalengkap }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin:</label>
                        <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                            <option value="Laki-laki" {{ $biodata_ptk->jeniskelamin == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki</option>
                            <option value="Perempuan" {{ $biodata_ptk->jeniskelamin == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $biodata_ptk->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nomorhp">Nomor HP:</label>
                        <input type="text" class="form-control" id="nomorhp" name="nomorhp"
                            value="{{ $biodata_ptk->nomorhp }}" required>
                    </div>
                    <!-- Tambahkan form input lainnya sesuai kebutuhan -->
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
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
        $(document).ready(function() {
            // initialize datatable
            $('#dt-basic-example').dataTable({
                responsive: true,
                columnDefs: [{
                        targets: -1,
                        title: 'Admin Controls',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            /*
                                                            -- ES6
                                                            -- convert using https://babeljs.io online transpiler
                                                            return `
                        <div class='d-flex mt-2'>
                            <a href='javascript:void(0);' class='btn btn-sm btn-outline-danger mr-2' title='Delete Record'>
                                <i class="fal fa-times"></i> Delete Record
                            </a>
                            <a href='javascript:void(0);' class='btn btn-sm btn-outline-primary mr-2' title='Edit'>
                                <i class="fal fa-edit"></i> Edit
                            </a>
                            <div class='dropdown d-inline-block'>
                                <a href='#'' class='btn btn-sm btn-outline-primary mr-2' data-toggle='dropdown' aria-expanded='true' title='More options'>
                                    <i class="fal fa-plus"></i>
                                </a>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='javascript:void(0);'>Change Status</a>
                                    <a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>
                                </div>
                            </div>
                        </div>`;

                                                            ES5 example below:

                                                            */
                            return "\n\t\t\t\t\t\t<div class='d-flex mt-2'>\n\t\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-outline-danger mr-2' title='Delete Record'><i class=\"fal fa-times\"></i> Delete Record</a>\n\t\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-outline-primary mr-2' title='Edit'><i class=\"fal fa-edit\"></i> Edit</a>\n\t\t\t\t\t\t\t<div class='dropdown d-inline-block'>\n\t\t\t\t\t\t\t\t<a href='#'' class='btn btn-sm btn-outline-primary mr-2' data-toggle='dropdown' aria-expanded='true' title='More options'><i class=\"fal fa-plus\"></i></a>\n\t\t\t\t\t\t\t\t<div class='dropdown-menu'>\n\t\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>\n\t\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>";
                        },
                    },
                    {
                        targets: 17,
                        /*	The `data` parameter refers to the data for the cell (defined by the
                            `data` option, which defaults to the column being worked with, in this case `data: 16`.*/
                        render: function(data, type, full, meta) {
                            var badge = {
                                1: {
                                    'title': 'Pending',
                                    'class': 'badge-warning'
                                },
                                2: {
                                    'title': 'Delivered',
                                    'class': 'badge-success'
                                },
                                3: {
                                    'title': 'Canceled',
                                    'class': 'badge-secondary'
                                },
                                4: {
                                    'title': 'Attempt #1',
                                    'class': 'bg-danger-100 text-white'
                                },
                                5: {
                                    'title': 'Attempt #2',
                                    'class': 'bg-danger-300 text-white'
                                },
                                6: {
                                    'title': 'Failed',
                                    'class': 'badge-danger'
                                },
                                7: {
                                    'title': 'Attention!',
                                    'class': 'badge-primary'
                                },
                                8: {
                                    'title': 'In Progress',
                                    'class': 'badge-success'
                                },
                            };
                            if (typeof badge[data] === 'undefined') {
                                return data;
                            }
                            return '<span class="badge ' + badge[data].class + ' badge-pill">' +
                                badge[data].title + '</span>';
                        },
                    }
                ],
            });
        });
    </script>
@endsection
