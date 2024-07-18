@extends('inc.main')
@section('title', 'App Fiturs')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/datagrid/datatables/datatables.bundle.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb')
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'cog',
                'heading1' => 'App Fiturs',
            ])
            @endcomponent
        </div>

        <x-panel.show title="Fiturs" subtitle="Application">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar class="ml-2">
                    <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#createModal">Tambah
                        Fitur</button>
                </x-panel.tool-bar>
            </x-slot>

            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Fitur</th>
                        <th>Aktif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appFiturs as $fitur)
                        <tr>
                            <td>{{ $fitur->id_fitur }}</td>
                            <td>{{ $fitur->nama_fitur }}</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        id="toggle-aktif-{{ $fitur->id_fitur }}" data-id="{{ $fitur->id_fitur }}"
                                        {{ $fitur->aktif == 'Y' ? 'checked' : '' }}>
                                    <label class="custom-control-label"
                                        for="toggle-aktif-{{ $fitur->id_fitur }}">{{ $fitur->aktif == 'Y' ? 'Di Tampilkan' : 'Di Sembunyikan' }}</label>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal"
                                    data-target="#editModal{{ $fitur->id_fitur }}">Edit</button>
                                <button class="btn btn-danger btn-xs"
                                    onclick="confirmDelete({{ $fitur->id_fitur }})">Delete</button>
                                <form id="delete-form-{{ $fitur->id_fitur }}"
                                    action="{{ route('app_fiturs.destroy', $fitur->id_fitur) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal{{ $fitur->id_fitur }}" tabindex="-1"
                            aria-labelledby="editModalLabel{{ $fitur->id_fitur }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $fitur->id_fitur }}">Edit Fitur</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('app_fiturs.update', $fitur->id_fitur) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Nama Fitur:</label>
                                                <input type="text" name="nama_fitur" class="form-control"
                                                    value="{{ $fitur->nama_fitur }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Aktif:</label>
                                                <select name="aktif" class="form-control">
                                                    <option value="Y" {{ $fitur->aktif == 'Y' ? 'selected' : '' }}>Y
                                                    </option>
                                                    <option value="N" {{ $fitur->aktif == 'N' ? 'selected' : '' }}>N
                                                    </option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary ml-auto">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </x-panel.show>
        <!-- Create Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Create New Fitur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('app_fiturs.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Fitur:</label>
                                <input type="text" name="nama_fitur" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Aktif:</label>
                                <select name="aktif" class="form-control">
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script>
        function confirmDelete(id) {
            bootbox.confirm({
                message: "Apakah yakin akan di hapus fitur ini?",
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
    <script>
        $(document).ready(function() {
            $('input[id^="toggle-aktif-"]').change(function() {
                var fiturId = $(this).data('id');
                var isChecked = $(this).is(':checked');
                var aktif = isChecked ? 'Y' : 'N';
                var statusText = isChecked ? 'Di Tampilkan' : 'Di Sembunyikan';

                $.ajax({
                    url: '{{ route('app_fiturs.toggleAktif') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: fiturId,
                        aktif: aktif
                    },
                    success: function(response) {
                        toastr.options.timeOut = 2000; // Menunda toastr selama 2 detik
                        toastr.success(response.message);
                        $(this).next('span').text(statusText);

                        // Menunda pengalihan halaman selama 2 detik sebelum mengarahkan ke halaman indeks
                        setTimeout(function() {
                            window.location.href =
                                '{{ route('app_fiturs.index') }}'; // Redirect to index page
                        }, 2000);
                    }.bind(this),
                    error: function(xhr) {
                        toastr.error('Something went wrong.');
                    }
                });
            });
        });
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
