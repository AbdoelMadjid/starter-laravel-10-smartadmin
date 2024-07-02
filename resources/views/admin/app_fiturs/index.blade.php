@extends('admin.inc.main')
@section('title', 'App Fiturs')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb')
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'cog',
                'heading1' => 'App Fiturs',
            ])
                <div class="subheader-block d-lg-flex align-items-center">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Selamat Datang</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-primary-500">
                            {{ auth()->user()->name }}
                        </span>
                    </div>
                </div>
                <div
                    class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Status</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-danger-500">
                            {{ auth()->user()->role }}
                        </span>
                    </div>
                </div>
            @endcomponent
        </div>

        <x-panel.show title="Fiturs" subtitle="Application">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar class="ml-2">
                    <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fal fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                        <a class="dropdown-item" href="/dashboard">Kembali</a>
                    </div>
                </x-panel.tool-bar>
            </x-slot>

            <table class="table table-sm table-bordered table-striped table-hover m-0">
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
                                <button class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#editModal{{ $fitur->id_fitur }}">Edit</button>
                                <button class="btn btn-danger btn-sm"
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
            <x-slot name="panelcontentfoot">
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#createModal">Create New
                    Fitur</button>
            </x-slot>
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
    <script src="/admin/js/notifications/toastr/toastr.js"></script>
    <script>
        function confirmDelete(id) {
            bootbox.confirm({
                message: "Are you sure you want to delete this fitur?",
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
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if (session('success'))
            toastr.success('{{ session('success') }}', null, {
                iconClass: 'toast-success'
            });
        @endif

        @if (session('error'))
            toastr.error('{{ session('error') }}', null, {
                iconClass: 'toast-error'
            });
        @endif

        @if (session('info'))
            toastr.info('{{ session('info') }}', null, {
                iconClass: 'toast-info'
            });
        @endif

        @if (session('warning'))
            toastr.warning('{{ session('warning') }}', null, {
                iconClass: 'toast-warning'
            });
        @endif
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
@endsection
