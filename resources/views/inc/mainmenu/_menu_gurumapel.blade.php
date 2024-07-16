<li class="{{ Request::is('gurumapel/profil_gmp*') ? 'active' : '' }}">
    <a href="{{ route('profil_gmp') }}" title="Profil Guru Mapel" data-filter-tags="gurumapel profil">
        <i class="fal fa-user-circle"></i>
        <span class="nav-link-text" data-i18n="nav.gurumapel_profil">Profil Guru Mapel</span>
    </a>
</li>
<li class="nav-title">Guru Mata Pelajaran</li>
<li class="{{ Request::is('gurumapel/data_kbm*') ? 'active' : '' }}">
    <a href="{{ route('data_kbm') }}" title="Data KBM" data-filter-tags="gurumapel data kbm">
        <i class="fal fa-briefcase"></i>
        <span class="nav-link-text" data-i18n="nav.gurumapel_data_kbm">Data KBM</span>
    </a>
</li>
<li class="{{ Request::is('gurumapel/capaian_pembelajaran_gmp*') ? 'active' : '' }}">
    <a href="{{ route('capaian_pembelajaran_gmp') }}" title="Capaian Pembelajaran"
        data-filter-tags="gurumapel capaian pembelajaran">
        <i class="fal fa-list-ul"></i>
        <span class="nav-link-text" data-i18n="nav.gurumapel_capaian_pembelajaran">Capaian Pembelajaran</span>
    </a>
</li>
<li class="{{ Request::is('gurumapel/proses_penilaian*') ? 'active' : '' }}">
    <a href="{{ route('proses_penilaian') }}" title="Proses Penilaian" data-filter-tags="gurumapel proses penilaian">
        <i class="fal fa-pencil-ruler"></i>
        <span class="nav-link-text" data-i18n="nav.gurumapel_proses_penilaian">Proses Penilaian</span>
    </a>
</li>
<li class="{{ Request::is('gurumapel/absensi*') ? 'active' : '' }}">
    <a href="{{ route('absensi') }}" title="Absensi" data-filter-tags="gurumapel absensi">
        <i class="fal fa-calendar-alt"></i>
        <span class="nav-link-text" data-i18n="nav.gurumapel_absensi">Absensi</span>
    </a>
</li>
