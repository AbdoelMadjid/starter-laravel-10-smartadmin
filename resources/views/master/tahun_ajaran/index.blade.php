@extends('inc.main')
@section('title', 'Tahun Ajaran')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Kurikulum',
        ])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'calendar-alt',
                'heading1' => 'Tahun',
                'heading2' => 'Ajaran',
            ])
            @endcomponent
        </div>
        <x-col :size1="4" :size2="8">
            <x-slot name='content1'>
                <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                    <h3 class="mb-g">
                        Hi Master Abdul Madjid,
                    </h3>
                    <p>
                        Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking
                        around
                        the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey,
                        we have
                        taken each piece of praise and criticism to heart to scope out our plans for SmartAdmin. All
                        feedback will
                        be used to make your favorite theme that much better, but these were some of the highlights.
                    </p>
                    <p>
                        Sincerely,<br>
                        The SmartAdmin Team<br>
                    </p>
                </div>
            </x-slot>
            <x-slot name='content2'>
                <div class="card mb-g shadow-5">
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title mb-0 fs-xl fw-700"> <i class="fal fa-calendar-alt color-primary-700"></i>
                            Tahun Ajaran {{ $tahunAjaranAktif->tahunajaran }} Semester {{ $tahunAjaranAktif->semester }}
                        </div>
                        <x-button color="primary" size="xs" pills :label="__('Tambah')" class="ml-auto" data-toggle="modal"
                            data-target="#createModal" />
                    </div>

                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Semester</th>
                                    <th>Aktif</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tahunAjarans as $tahunAjaran)
                                    <tr>
                                        <td>{{ $tahunAjaran->id_ta }}</td>
                                        <td>{{ $tahunAjaran->tahunajaran }}</td>
                                        <td>{{ $tahunAjaran->semester }}</td>
                                        <td>{{ $tahunAjaran->aktif }}</td>
                                        <td>
                                            <button class="btn btn-warning" data-toggle="modal"
                                                data-target="#editModal{{ $tahunAjaran->id_ta }}">Edit</button>
                                            <form action="{{ route('tahun_ajaran.destroy', $tahunAjaran->id_ta) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-3">

                        </div>
                    </div>
                </div>
            </x-slot>
        </x-col>
        <!-- Create Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('tahun_ajaran.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Add Tahun Ajaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tahunajaran">Tahun Ajaran</label>
                                <input type="text" class="form-control" id="tahunajaran" name="tahunajaran" required>
                            </div>
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select class="form-control" id="semester" name="semester" required>
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="aktif">Aktif</label>
                                <select class="form-control" id="aktif" name="aktif" required>
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modals -->
        @foreach ($tahunAjarans as $tahunAjaran)
            <div class="modal fade" id="editModal{{ $tahunAjaran->id_ta }}" tabindex="-1"
                aria-labelledby="editModalLabel{{ $tahunAjaran->id_ta }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('tahun_ajaran.update', $tahunAjaran->id_ta) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $tahunAjaran->id_ta }}">Edit Tahun Ajaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="tahunajaran">Tahun Ajaran</label>
                                    <input type="text" class="form-control" id="tahunajaran" name="tahunajaran"
                                        value="{{ $tahunAjaran->tahunajaran }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester</label>
                                    <select class="form-control" id="semester" name="semester" required>
                                        <option value="Ganjil" {{ $tahunAjaran->semester == 'Ganjil' ? 'selected' : '' }}>
                                            Ganjil</option>
                                        <option value="Genap" {{ $tahunAjaran->semester == 'Genap' ? 'selected' : '' }}>
                                            Genap</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="aktif">Aktif</label>
                                    <select class="form-control" id="aktif" name="aktif" required>
                                        <option value="Y" {{ $tahunAjaran->aktif == 'Y' ? 'selected' : '' }}>Y
                                        </option>
                                        <option value="N" {{ $tahunAjaran->aktif == 'N' ? 'selected' : '' }}>N
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
