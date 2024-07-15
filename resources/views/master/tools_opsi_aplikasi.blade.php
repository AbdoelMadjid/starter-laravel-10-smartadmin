@extends('inc.main')
@section('title', 'Opsi Aplikasi')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Tools',
        ])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'clipboard-list-check',
                'heading1' => 'Opsi',
                'heading2' => 'Aplikasi',
            ])
            @endcomponent
        </div>
        <x-col size1=3 size2=3 size3=6>
            <x-slot name="content1">
                <x-panel.show title="Akses" subtitle="Users">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar class="ml-2">
                            <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fal fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                                <a class="dropdown-item" href="/dashboard">Kembali</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </x-panel.tool-bar>
                    </x-slot>
                    <div class="table-responsive-lg">
                        <table class="table table-bordered table-striped table-hover m-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Hak Akses</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </x-panel.show>
            </x-slot>
            <x-slot name="content2">
                <x-panel.show title="Aktifkan" subtitle="Fitur">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar class="ml-2">
                            <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fal fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                                <a class="dropdown-item" href="/dashboard">Kembali</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </x-panel.tool-bar>
                    </x-slot>
                    <div class="table-responsive-lg">
                        <table class="table table-sm table-bordered table-striped table-hover m-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Hak Akses</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </x-panel.show>
            </x-slot>
            <x-slot name="content3">
                <x-panel.show title="Under" subtitle="Construction">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar class="ml-2">
                            <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fal fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                                <a class="dropdown-item" href="/dashboard">Kembali</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </x-panel.tool-bar>
                    </x-slot>
                    <form>
                        <div class="form-group">
                            <label class="form-label" for="example-date">Date</label>
                            <input class="form-control" id="example-date" type="date" name="date" value="2023-07-23">
                        </div>

                        <x-slot name="panelcontentfoot">
                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customSwitch1radio"
                                    name="defaultSwitchRadioExample">
                                <label class="custom-control-label" for="customSwitch1radio">Unchecked</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customSwitch2radio" checked=""
                                    name="defaultSwitchRadioExample">
                                <label class="custom-control-label" for="customSwitch2radio">Checked</label>
                            </div>
                            <x-button href="#" size="sm" :label="__('Simpan')" class="ml-auto" />
                        </x-slot>
                    </form>
                </x-panel.show>
            </x-slot>
        </x-col>
    </main>
@endsection
