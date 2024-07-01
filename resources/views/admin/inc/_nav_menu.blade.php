<ul id="js-nav-menu" class="nav-menu">
    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard" title="Dashboard" data-filter-tags="application dashboard">
            <i class="fal fa-home"></i>
            <span class="nav-link-text" data-i18n="nav.application_dashboard">Dashboard</span>
        </a>
    </li>

    @if (auth()->user()->role == 'Admin')
        @include('admin.inc.mainmenu._menu_master')
    @endif
    @if (auth()->user()->role == 'Wali Kelas')
        @include('admin.inc.mainmenu._menu_walikelas')
    @endif
    @if (auth()->user()->role == 'Guru Mapel')
        @include('admin.inc.mainmenu._menu_gurumapel')
    @endif
    @if (auth()->user()->role == 'Siswa')
        @include('admin.inc.mainmenu._menu_siswa')
    @endif
    @if (auth()->user()->role == 'Admin')
        @include('admin.inc.mainmenu._menu_depelover')
        @include('admin.inc.mainmenu._menu_intel_app')
        @include('admin.inc.mainmenu._menu_tools_component_app')
        @include('admin.inc.mainmenu._menu_plugin_addon_app')
        @include('admin.inc.mainmenu._menu_layouts_app')
    @endif
    <div class="m-0 w-100 p-2"></div>
    <li class="{{ Request::is('about') ? 'active' : '' }}">
        <a href="/about" title="About" data-filter-tags="application about">
            <i class="fal fa-info-circle"></i>
            <span class="nav-link-text" data-i18n="nav.application_about">About</span>
        </a>
    </li>
</ul>
