<li class="nav-title">Wali Kelas</li>
<li class="{{ Request::is('walikelas_profil*') ? 'active' : '' }}">
    <a href="/walikelas_profil" title="Profil Wali Kelas" data-filter-tags="walikelas profil">
        <i class="fal fa-user-circle"></i>
        <span class="nav-link-text" data-i18n="nav.walikelas_profil">Profil Wali Kelas</span>
    </a>
</li>
<li class="{{ Request::is('walikelas_data_kelas*') ? 'active' : '' }}">
    <a href="/walikelas_data_kelas" title="Data Kelas" data-filter-tags="walikelas data kelas">
        <i class="fal fa-house-user"></i>
        <span class="nav-link-text" data-i18n="nav.walikelas_data_kelas">Data Kelas</span>
    </a>
</li>
<li class="{{ Request::is('walikelas_identitas_siswa*') ? 'active' : '' }}">
    <a href="/walikelas_identitas_siswa" title="Identitas Siswa" data-filter-tags="walikelas identitas siswa">
        <i class="fal fa-user-graduate"></i>
        <span class="nav-link-text" data-i18n="nav.walikelas_identitas_siswa">Identitas Siswa</span>
    </a>
</li>
<li class="{{ Request::is('walikelas_rapor_siswa*') ? 'active open' : '' }}">
    <a href="javascript:void(0);" title="Rapor Siswa" data-filter-tags="walikelas rapor siswa">
        <i class="fal fa-address-book"></i>
        <span class="nav-link-text" data-i18n="nav.walikelas_rapor_siswa">Rapor Siswa</span>
    </a>
    <ul>
        <li class="{{ Request::is('walikelas_rapor_siswa_absensi*') ? 'active' : '' }}">
            <a href="/walikelas_rapor_siswa_absensi" title="Absensi" data-filter-tags="walikelas rapor siswa absensi">
                <span class="nav-link-text" data-i18n="nav.walikelas_rapor_siswa_absensi">Absensi</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas_rapor_siswa_kegiatan_eskul*') ? 'active' : '' }}">
            <a href="/walikelas_rapor_siswa_kegiatan_eskul" title="Kegiatan Eskul"
                data-filter-tags="walikelas rapor siswa kegiatan eskul">
                <span class="nav-link-text" data-i18n="nav.walikelas_rapor_siswa_kegiatan_eskul">Kegiatan Eskul</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas_rapor_siswa_prestasi_siswa') ? 'active' : '' }}">
            <a href="/walikelas_rapor_siswa_prestasi_siswa" title="Prestasi Siswa"
                data-filter-tags="walikelas rapor siswa prestasi siswa">
                <span class="nav-link-text" data-i18n="nav.walikelas_rapor_siswa_prestasi_siswa">Prestasi Siswa</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas_rapor_siswa_praktek_kerja') ? 'active' : '' }}">
            <a href="/walikelas_rapor_siswa_praktek_kerja" title="Praktek Kerja"
                data-filter-tags="walikelas rapor siswa praktek kerja">
                <span class="nav-link-text" data-i18n="nav.walikelas_rapor_siswa_praktek_kerja">Praktek Kerja</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas_rapor_siswa_catatan') ? 'active' : '' }}">
            <a href="/walikelas_rapor_siswa_catatan" title="Catatan" data-filter-tags="walikelas rapor siswa catatan">
                <span class="nav-link-text" data-i18n="nav.walikelas_rapor_siswa_catatan">Catatan</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('walikelas_peringkat_kelas*') ? 'active' : '' }}">
    <a href="/walikelas_peringkat_kelas" title="Peringkat Kelas" data-filter-tags="walikelas peringkat kelas">
        <i class="fal fa-chart-line"></i>
        <span class="nav-link-text" data-i18n="nav.walikelas_peringkat_kelas">Peringkat Kelas</span>
    </a>
</li>
<li class="{{ Request::is('walikelas_remedial*') ? 'active' : '' }}">
    <a href="/walikelas_remedial" title="Remedial" data-filter-tags="walikelas remedial">
        <i class="fal fa-retweet-alt"></i>
        <span class="nav-link-text" data-i18n="nav.walikelas_remedial">Remedial</span>
    </a>
</li>
