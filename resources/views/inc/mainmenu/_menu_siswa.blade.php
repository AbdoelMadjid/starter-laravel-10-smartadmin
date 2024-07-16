<li class="{{ Request::is('pesertadidik/profil_siswa*') ? 'active' : '' }}">
    <a href="{{ route('profil_siswa') }}" title="Profil Peserta Didik" data-filter-tags="siswa profil">
        <i class="fal fa-user-circle"></i>
        <span class="nav-link-text" data-i18n="nav.siswa_profil">Profil Peserta Didik</span>
    </a>
</li>
<li class="nav-title">Peserta Didik</li>
<li class="{{ Request::is('pesertadidik/lcks*') ? 'active open' : '' }}">
    <a href="javascript:void(0);') }}" title="Capaian Pembelajaran" data-filter-tags="siswa capaian pembelajaran">
        <i class="fal fa-address-book"></i>
        <span class="nav-link-text" data-i18n="nav.siswa_lcks">Capaian Pembelajaran</span>
    </a>
    <ul>
        <li class="{{ Request::is('pesertadidik/lcks_penilaian*') ? 'active' : '' }}">
            <a href="{{ route('lcks_penilaian') }}" title="Hasil Penilaian" data-filter-tags="siswa lcks penilaian">
                <span class="nav-link-text" data-i18n="nav.siswa_lcks_penilaian">Hasil Penilaian</span>
            </a>
        </li>
        <li class="{{ Request::is('pesertadidik/lcks_absensi*') ? 'active' : '' }}">
            <a href="{{ route('lcks_absensi') }}" title="Absensi" data-filter-tags="siswa lcks absensi">
                <span class="nav-link-text" data-i18n="nav.siswa_lcks_absensi">Absensi</span>
            </a>
        </li>
        <li class="{{ Request::is('pesertadidik/lcks_kegiatan_eskul*') ? 'active' : '' }}">
            <a href="{{ route('lcks_kegiatan_eskul') }}" title="Kegiatan Eskul"
                data-filter-tags="siswa lcks kegiatan eskul">
                <span class="nav-link-text" data-i18n="nav.siswa_lcks_kegiatan_eskul">Kegiatan Eskul</span>
            </a>
        </li>
        <li class="{{ Request::is('pesertadidik/lcks_prestasi_siswa*') ? 'active' : '' }}">
            <a href="{{ route('lcks_prestasi_siswa') }}" title="Prestasi Siswa"
                data-filter-tags="siswa lcks prestasi siswa">
                <span class="nav-link-text" data-i18n="nav.siswa_lcks_prestasi_siswa">Prestasi Siswa</span>
            </a>
        </li>
        <li class="{{ Request::is('pesertadidik/lcks_praktek_kerja*') ? 'active' : '' }}">
            <a href="{{ route('lcks_praktek_kerja') }}" title="Praktek Kerja"
                data-filter-tags="siswa lcks praktek kerja">
                <span class="nav-link-text" data-i18n="nav.siswa_lcks_praktek_kerja">Praktek Kerja</span>
            </a>
        </li>
        <li class="{{ Request::is('pesertadidik/lcks_catatan*') ? 'active' : '' }}">
            <a href="{{ route('lcks_catatan') }}" title="Catatan" data-filter-tags="siswa lcks catatan">
                <span class="nav-link-text" data-i18n="nav.siswa_lcks_catatan">Catatan</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('pesertadidik/remedial_siswa*') ? 'active' : '' }}">
    <a href="{{ route('remedial_siswa') }}" title="Cek Remedial" data-filter-tags="siswa remedial">
        <i class="fal fa-retweet-alt"></i>
        <span class="nav-link-text" data-i18n="nav.siswa_remedial">Cek Remedial</span>
    </a>
</li>
