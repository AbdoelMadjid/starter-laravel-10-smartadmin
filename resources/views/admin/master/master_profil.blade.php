@extends('admin.inc.main')
@section('title', 'Profil Master')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', ['category_1' => 'Master'])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'user-circle',
                'heading1' => 'Profil',
                'heading2' => 'Master',
                'sup' => 'ADDON',
            ])
            @endcomponent
        </div>
        <x-row-column :column="2">
            <x-slot name='column1'>
                <x-panel.show title="Profil" subtitle="Master">
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
                    <div class="row no-gutters row-grid">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                <img src="/admin/img/demo/avatars/avatar-admin-lg.png"
                                    class="rounded-circle shadow-2 img-thumbnail" alt="">
                                <h5 class="mb-0 fw-700 text-center mt-3">
                                    Dr. Codex Lantern
                                    <small class="text-muted mb-0">Toronto, Canada</small>
                                </h5>
                                <div class="mt-4 text-center demo">
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#3b5998">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#38A1F3">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#db3236">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#0077B5">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#000000">
                                        <i class="fab fa-reddit-alien"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#00AFF0">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#0063DC">
                                        <i class="fab fa-flickr"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center py-3">
                                <h5 class="mb-0 fw-700">
                                    764
                                    <small class="text-muted mb-0">Connections</small>
                                </h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center py-3">
                                <h5 class="mb-0 fw-700">
                                    1,673
                                    <small class="text-muted mb-0">Followers</small>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <a href="javascript:void(0);" class="btn-link font-weight-bold">Follow</a> <span
                                    class="text-primary d-inline-block mx-3">&#9679;</span>
                                <a href="javascript:void(0);" class="btn-link font-weight-bold">Message</a> <span
                                    class="text-primary d-inline-block mx-3">&#9679;</span>
                                <a href="javascript:void(0);" class="btn-link font-weight-bold">Connect</a>
                            </div>
                        </div>
                    </div>
                </x-panel.show>
            </x-slot>
            <x-slot name='column2'>
                <x-panel.show title="Default" subtitle="Example">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar>
                            <select class="custom-select custom-select-sm">
                                <option selected="">Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </x-panel.tool-bar>
                        <x-panel.tool-bar class="ml-2">
                            <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                                <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                                <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                            </div>
                        </x-panel.tool-bar>
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
                    <x-slot name="tagpanel">
                        All panels needs to have an unique ID in order to use the panel funtions.
                        <code>.panel</code> is a container with no padding, <code>.panel-hdr</code> has a
                        <code>min-height</code> value and default <code>flexbox</code> properties. The
                        <code>.panel-toolbar</code> is inserted into <code>.panel-hdr</code> for extra elements. The
                        <code>.panel-container</code> wraps <code>.panel-content</code> which has a predefined
                        padding.
                    </x-slot>
                    <p>
                        ini content panel
                    </p>
                    <x-slot name="panelcontentfoot">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="demoCheck">
                            <label class="custom-control-label" for="demoCheck">Checkbox</label>
                        </div>
                        <x-button href="/dev_component" size="sm" :label="__('Small')" class="ml-auto" />
                    </x-slot>
                </x-panel.show>
            </x-slot>
        </x-row-column>
    </main>
@endsection
