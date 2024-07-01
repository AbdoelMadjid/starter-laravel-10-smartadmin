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

        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g shadow-5">
            <div class="input-group input-group-lg mb-g">
                <input type="text" class="form-control shadow-inset-2" placeholder="Search Threads">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fal fa-search"></i></span>
                </div>
            </div>
            <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#createModal">Create New Fitur</button>

            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif

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
                            <td>{{ $fitur->aktif }}</td>
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
        </div>
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
@endsection
