<li class="{{ Request::is('admin/profil_admin*') ? 'active' : '' }}">
    <a href="{{ route('profil_admin') }}" title="Profil Admin" data-filter-tags="admin profil">
        <i class="fal fa-user-circle"></i>
        <span class="nav-link-text" data-i18n="nav.admin_profil">Profil Admin</span>
    </a>
</li>
<li class="nav-title">Master</li>
<li class="{{ Request::is('tools/*') ? 'active open' : '' }}">
    <a href="#" title="Tools" data-filter-tags="tools">
        <i class="fal fa-cogs"></i>
        <span class="nav-link-text" data-i18n="nav.tools">Tools</span>
    </a>
    <ul>
        <li class="{{ Request::is('tools/app_profiles*') ? 'active' : '' }}">
            <a href="/tools/app_profiles" title="App Profiles" data-filter-tags="tools app profiles">
                <span class="nav-link-text" data-i18n="nav.tools_app_profiles">Profil Aplikasi</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/app_fiturs*') ? 'active' : '' }}">
            <a href="/tools/app_fiturs" title="App Fiturs" data-filter-tags="tools app fiturs">
                <span class="nav-link-text" data-i18n="nav.tools_app_fiturs">Fitur Aplikasi</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/impor_data_master*') ? 'active' : '' }}">
            <a href="{{ route('impor_data_master') }}" title="Impor Data Master"
                data-filter-tags="tools impor data master">
                <span class="nav-link-text" data-i18n="nav.tools_impor_data_master">Impor Data Master</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/ekspor_data_master*') ? 'active' : '' }}">
            <a href="{{ route('ekspor_data_master') }}" title="Ekspor Data Master"
                data-filter-tags="tools ekspor data master">
                <span class="nav-link-text" data-i18n="nav.tools_ekspor_data_master">Ekspor Data Master</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/backup_database*') ? 'active' : '' }}">
            <a href="{{ route('backup_database') }}" title="Backup Database" data-filter-tags="tools backup database">
                <span class="nav-link-text" data-i18n="nav.tools_backup_database">Backup Database</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/data_login*') ? 'active' : '' }}">
            <a href="{{ route('data_login') }}" title="Data Login" data-filter-tags="tools data login">
                <span class="nav-link-text" data-i18n="nav.tools_data_login">Data Login</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('akademik/*') ? 'active open' : '' }}">
    <a href="#" title="Akademik" data-filter-tags="akademik">
        <i class="fal fa-briefcase"></i>
        <span class="nav-link-text" data-i18n="nav.akademik">Akademik</span>
    </a>
    <ul>
        <li class="{{ Request::is('akademik/profil-sekolah*') ? 'active' : '' }}">
            <a href="{{ route('profil-sekolah.index') }}" title="Profil Sekolah"
                data-filter-tags="akademik profil sekolah">
                <span class="nav-link-text" data-i18n="nav.akademik_profil_sekolah">Profil Sekolah</span>
            </a>
        </li>
        <li class="{{ Request::is('akademik/tenaga_pendidik*') ? 'active' : '' }}">
            <a href="{{ route('tenaga_pendidik.index') }}" title="Tenaga Pendidik"
                data-filter-tags="akademik tenaga pendidik">
                <span class="nav-link-text" data-i18n="nav.akademik_tenaga_pendidik">Tenaga Pendidik</span>
            </a>
        </li>
        <li class="{{ Request::is('akademik/kompetensi-keahlian*') ? 'active' : '' }}">
            <a href="{{ route('kompetensi-keahlian.index') }}" title="Kompetensi Keahlian"
                data-filter-tags="akademik kompetensi keahlian">
                <span class="nav-link-text" data-i18n="nav.akademik_kompetensi_keahlian">Kompetensi Keahlian</span>
            </a>
        </li>
        <li class="{{ Request::is('akademik/mata_pelajaran*') ? 'active' : '' }}">
            <a href="{{ route('mata_pelajaran') }}" title="Mata Pelajaran" data-filter-tags="akademik mata pelajaran">
                <span class="nav-link-text" data-i18n="nav.akademik_mata_pelajaran">Mata Pelajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('akademik/capaian_pembelajaran*') ? 'active' : '' }}">
            <a href="{{ route('capaian_pembelajaran') }}" title="Capaian Pembelajaran"
                data-filter-tags="akademik capaian pembelajaran">
                <span class="nav-link-text" data-i18n="nav.akademik_capaian_pembelajaran">Capaian Pembelajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('akademik/kelas_walikelas*') ? 'active' : '' }}">
            <a href="{{ route('kelas_walikelas') }}" title="Kelas dan Wali Kelas"
                data-filter-tags="akademik kelas dan wali kelas">
                <span class="nav-link-text" data-i18n="nav.akademik_kelas_walikelas">Kelas & Wali Kelas</span>
            </a>
        </li>
        <li class="{{ Request::is('akademik/peserta_didik*') ? 'active' : '' }}">
            <a href="{{ route('peserta_didik') }}" title="Peserta Didik" data-filter-tags="akademik peserta didik">
                <span class="nav-link-text" data-i18n="nav.akademik_peserta_didik">Peserta Didik</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('kurikulum/*') ? 'active open' : '' }}">
    <a href="#" title="Kurikulum" data-filter-tags="kurikulum">
        <i class="fal fa-credit-card"></i>
        <span class="nav-link-text" data-i18n="nav.kurikulum">Kurikulum</span>
    </a>
    <ul>
        <li class="{{ Request::is('kurikulum/tahun_ajaran*') ? 'active' : '' }}">
            <a href="{{ route('tahun_ajaran.index') }}" title="Tahun Ajaran"
                data-filter-tags="kurikulum tahunajaran">
                <span class="nav-link-text" data-i18n="nav.kurikulum_tahunajaran">Tahun Ajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('kurikulum/versi*') ? 'active' : '' }}">
            <a href="{{ route('versi') }}" title="Versi Kurikulum" data-filter-tags="kurikulum versi kurikulum">
                <span class="nav-link-text" data-i18n="nav.kurikulum_versi">Versi Kurikulum</span>
            </a>
        </li>
        <li class="{{ Request::is('kurikulum/pengumuman*') ? 'active' : '' }}">
            <a href="{{ route('pengumuman') }}" title="Pengumuman" data-filter-tags="kurikulum pengumuman">
                <span class="nav-link-text" data-i18n="nav.kurikulum_pengumuman">Pengumuman</span>
            </a>
        </li>
        <li class="{{ Request::is('kurikulum/perakat_ujian*') ? 'active' : '' }}">
            <a href="{{ route('perakat_ujian') }}" title="Perangkat Ujian"
                data-filter-tags="kurikulum perangkat ujian">
                <span class="nav-link-text" data-i18n="nav.kurikulum_perakat_ujian">Perangkat Ujian</span>
            </a>
        </li>
        <li class="{{ Request::is('kurikulum/proses_kbm*') ? 'active open' : '' }}">
            <a href="javascript:void(0);') }}" title="Proses KBM" data-filter-tags="kurikulum proses kbm">
                <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm">Proses KBM</span>
            </a>
            <ul>
                <li class="{{ Request::is('kurikulum/proses_kbm_perkelas*') ? 'active' : '' }}">
                    <a href="{{ route('proses_kbm_perkelas') }}" title="Per Kelas"
                        data-filter-tags="kurikulum proses kbm perkelas">
                        <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm_perkelas">Per Kelas</span>
                    </a>
                </li>
                <li class="{{ Request::is('kurikulum/proses_kbm_perguru*') ? 'active' : '' }}">
                    <a href="{{ route('proses_kbm_perguru') }}" title="Per Guru"
                        data-filter-tags="kurikulum proses kbm perguru">
                        <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm_perguru">Per Guru</span>
                    </a>
                </li>
                <li class="{{ Request::is('kurikulum/proses_kbm_remedial*') ? 'active' : '' }}">
                    <a href="{{ route('proses_kbm_remedial') }}" title="Remedial"
                        data-filter-tags="kurikulum proses kbm remedial">
                        <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm_remedial">Remedial</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('kurikulum/cetak_rapor*') ? 'active' : '' }}">
            <a href="{{ route('cetak_rapor') }}" title="Cetak Rapor" data-filter-tags="kurikulum cetak rapor">
                <span class="nav-link-text" data-i18n="nav.kurikulum_cetak_rapor">Cetak Rapor</span>
            </a>
        </li>
        <li class="{{ Request::is('kurikulum/transkrip_nilai*') ? 'active' : '' }}">
            <a href="{{ route('transkrip_nilai') }}" title="Transkrip Nilai"
                data-filter-tags="kurikulum transkrip nilai">
                <span class="nav-link-text" data-i18n="nav.kurikulum_transkrip_nilai">Transkrip Nilai</span>
            </a>
        </li>
    </ul>
</li>
