@extends('admin.inc.main')
@section('title', 'Opsi Login')
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
                'icon' => 'sign-in-alt',
                'heading1' => 'Opsi Login',
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

        <x-panel.show title="Opsi" subtitle="Login">
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
                        <th>Peran</th>
                        <th>Aktif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($opsiLogins as $opsi)
                        <tr>
                            <td>{{ $opsi->id }}</td>
                            <td>{{ $opsi->peran }}</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        id="toggle-aktif-{{ $opsi->id }}" data-id="{{ $opsi->id }}"
                                        {{ $opsi->aktif == 'Y' ? 'checked' : '' }}>
                                    <label class="custom-control-label"
                                        for="toggle-aktif-{{ $opsi->id }}">{{ $opsi->aktif == 'Y' ? 'On' : 'Off' }}</label>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#editModal{{ $opsi->id }}">Edit</button>
                                <button class="btn btn-danger btn-sm"
                                    onclick="confirmDelete({{ $opsi->id }})">Delete</button>
                                <form id="delete-form-{{ $opsi->id }}"
                                    action="{{ route('opsi_logins.destroy', $opsi->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal{{ $opsi->id }}" tabindex="-1"
                            aria-labelledby="editModalLabel{{ $opsi->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $opsi->id }}">Edit Opsi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('opsi_logins.update', $opsi->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Peran:</label>
                                                <input type="text" name="peran" class="form-control"
                                                    value="{{ $opsi->peran }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Aktif:</label>
                                                <select name="aktif" class="form-control">
                                                    <option value="Y" {{ $opsi->aktif == 'Y' ? 'selected' : '' }}>Y
                                                    </option>
                                                    <option value="N" {{ $opsi->aktif == 'N' ? 'selected' : '' }}>N
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
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#createModal">Create</button>
            </x-slot>
        </x-panel.show>
        <!-- Create Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Create Opsi Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('opsi_logins.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Peran:</label>
                                <input type="text" name="peran" class="form-control" required>
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
                message: "Apakah yakin akan di hapus opsi login ini?",
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
                var statusText = isChecked ? 'On' : 'Off';

                $.ajax({
                    url: '{{ route('opsi_logins.toggleAktif') }}',
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
                                '{{ route('opsi_logins.index') }}'; // Redirect to index page
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
