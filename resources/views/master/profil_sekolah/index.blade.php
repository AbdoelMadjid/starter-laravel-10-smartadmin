@extends('inc.main')
@section('title', 'Identitas Sekolah')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Akademik',
        ])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'university',
                'heading1' => 'Identitas',
                'heading2' => 'Sekolah',
            ])
            @endcomponent
        </div>
        <x-col :size1="4" :size2="8">
            <x-slot name='content1'>
                <div class="card mb-g shadow-5">
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title mb-0 fs-xl fw-700"> <i class="fal fa-university color-primary-700"></i>
                            Identitas Sekolah
                        </div>
                        {{-- <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#editModal">Edit</button> --}}
                        <x-button type="button" color="primary" icon="edit" size="xs" pills :label="__('Edit')"
                            class="ml-auto" data-toggle="modal" data-target="#editModal" />
                        {{-- <button class="btn btn-icon btn-xs ml-auto fs-xl" data-toggle="dropdown">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <button class="dropdown-item">
                                Option 1
                            </button>
                            <button class="dropdown-item">
                                Option 2
                            </button>
                            <div class="dropdown-divider m-0"></div>
                            <button class="dropdown-item">
                                Refresh
                            </button>
                        </div> --}}
                    </div>
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <div class="align-items-center">
                                    @if ($profilSekolah->logo_sekolah)
                                        <center>
                                            <img src="{{ asset('admin/img/' . $profilSekolah->logo_sekolah) }}"
                                                alt="Logo Sekolah" width="100">
                                        </center>
                                    @else
                                        No logo
                                    @endif
                                    <div class="p-1 text-center">
                                        <strong class="fw-900 fs-xxl color-primary-400">
                                            {{ $profilSekolah->nm_sekolah }}
                                        </strong>
                                        <br>
                                        Laporan Capaian Kompetensi Siswa
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="table-responsive m-4">
                                    <table class="table table-clean table-sm align-self-end"
                                        style='margin: 0 auto;width:100%;border-collapse:collapse;'>
                                        <tbody>
                                            <tr>
                                                <td colspan="2">NPSN</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->npsn }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Nama Sekolah</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->nm_sekolah }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Status</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->status }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Alamat</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="30"></td>
                                                <td>Jalan</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_blok }} No. {{ $profilSekolah->alamat_no }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>RT / RW</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_rt }} / {{ $profilSekolah->alamat_rw }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Desa</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_desa }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Kecamatan</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_kec }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Kabupaten</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_kab }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Provinsi</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_provinsi }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Kode Pos</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_kodepos }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Telp</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_telepon }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Website</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_website }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Email</td>
                                                <td>:</td>
                                                <td>{{ $profilSekolah->alamat_email }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </x-slot>
            <x-slot name='content2'>
                <div class="card m-auto border shadow-5">
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title mb-0 fs-xl fw-700"> <i class="fal fa-user color-primary-700"></i>
                            Kepala Sekolah
                        </div>
                        <x-button color="primary" icon="plus-square" size="xs" pills :label="__('Tambah')"
                            class="ml-auto" />
                    </div>
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <table class="table table-sm table-bordered table-striped table-hover m-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <th>Nama Lengkap</th>
                                        <th>Aktif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2021-2022</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>2022-2023</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>2025-2024</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="p-3">

                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name='content3'>

            </x-slot>
        </x-col>
        <!-- Edit Modal -->
        @if ($profilSekolah)
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('profil-sekolah.update', $profilSekolah->npsn) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Profil Sekolah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row form-group">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="nm_sekolah">Nama Sekolah</label>
                                        <input type="text" class="form-control" name="nm_sekolah"
                                            value="{{ $profilSekolah->nm_sekolah }}" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="status">Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value="Negeri"
                                                {{ $profilSekolah->status == 'Negeri' ? 'selected' : '' }}>
                                                Negeri</option>
                                            <option value="Swasta"
                                                {{ $profilSekolah->status == 'Swasta' ? 'selected' : '' }}>
                                                Swasta</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="alamat_blok">Jalan/Blok</label>
                                        <input type="text" class="form-control" name="alamat_blok"
                                            value="{{ $profilSekolah->alamat_blok }}" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="form-label" for="alamat_no">Nomor</label>
                                        <input type="text" class="form-control" name="alamat_no"
                                            value="{{ $profilSekolah->alamat_no }}" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="form-label" for="alamat_rt">RT</label>
                                        <input type="text" class="form-control" name="alamat_rt"
                                            value="{{ $profilSekolah->alamat_rt }}" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="form-label" for="alamat_rw">RW</label>
                                        <input type="text" class="form-control" name="alamat_rw"
                                            value="{{ $profilSekolah->alamat_rw }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="alamat_desa">Desa</label>
                                        <input type="text" class="form-control" name="alamat_desa"
                                            value="{{ $profilSekolah->alamat_desa }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="alamat_kec">Kecamatan</label>
                                        <input type="text" class="form-control" name="alamat_kec"
                                            value="{{ $profilSekolah->alamat_kec }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="alamat_kab">Kabupaten</label>
                                        <input type="text" class="form-control" name="alamat_kab"
                                            value="{{ $profilSekolah->alamat_kab }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="alamat_provinsi">Provinsi</label>
                                        <input type="text" class="form-control" name="alamat_provinsi"
                                            value="{{ $profilSekolah->alamat_provinsi }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="alamat_kodepos">Kode Pos</label>
                                        <input type="text" class="form-control" name="alamat_kodepos"
                                            value="{{ $profilSekolah->alamat_kodepos }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="alamat_telepon">Telepon</label>
                                        <input type="text" class="form-control" name="alamat_telepon"
                                            value="{{ $profilSekolah->alamat_telepon }}" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="alamat_website">Website</label>
                                        <input type="text" class="form-control" name="alamat_website"
                                            value="{{ $profilSekolah->alamat_website }}" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="alamat_email">Email</label>
                                        <input type="text" class="form-control" name="alamat_email"
                                            value="{{ $profilSekolah->alamat_email }}" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="logo_sekolah">Logo Sekolah</label>
                                        <input type="file" class="form-control-file" name="logo_sekolah">
                                    </div>
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
        @endif
    </main>
@endsection
