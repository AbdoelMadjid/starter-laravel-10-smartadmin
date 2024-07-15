<li class="{{ Request::is('master/tools/master_profil*') ? 'active' : '' }}">
    <a href="/master/tools/master_profil" title="Profil Master" data-filter-tags="master profil">
        <i class="fal fa-user-circle"></i>
        <span class="nav-link-text" data-i18n="nav.master_profil">Profil Master</span>
    </a>
</li>
<li class="nav-title">Tools App</li>
<li class="{{ Request::is('master/tools/app_fiturs*') ? 'active' : '' }}">
    <a href="/master/tools/app_fiturs" title="App Fiturs" data-filter-tags="tools app fiturs">
        <i class="fal fa-cog"></i>
        <span class="nav-link-text" data-i18n="nav.tools_app_fiturs">App Fiturs</span>
    </a>
</li>
<li class="{{ Request::is('master/tools/app_profiles*') ? 'active' : '' }}">
    <a href="/master/tools/app_profiles" title="App Profiles" data-filter-tags="tools app profiles">
        <i class="fal fa-laptop-code"></i>
        <span class="nav-link-text" data-i18n="nav.tools_app_profiles">App Profiles</span>
    </a>
</li>
<li class="nav-title">Master</li>
<li class="{{ Request::is('master/tools/tools*') ? 'active open' : '' }}">
    <a href="#" title="Tools" data-filter-tags="tools">
        <i class="fal fa-cogs"></i>
        <span class="nav-link-text" data-i18n="nav.tools">Tools</span>
    </a>
    <ul>
        <li class="{{ Request::is('master/tools/tools_impor_data_master*') ? 'active' : '' }}">
            <a href="{{ route('tools_impor_data_master') }}" title="Impor Data Master"
                data-filter-tags="tools impor data master">
                <span class="nav-link-text" data-i18n="nav.tools_impor_data_master">Impor Data Master</span>
            </a>
        </li>
        <li class="{{ Request::is('master/tools/tools_ekspor_data_master*') ? 'active' : '' }}">
            <a href="{{ route('tools_ekspor_data_master') }}" title="Ekspor Data Master"
                data-filter-tags="tools ekspor data master">
                <span class="nav-link-text" data-i18n="nav.tools_ekspor_data_master">Ekspor Data Master</span>
            </a>
        </li>
        <li class="{{ Request::is('master/tools/tools_backup_database*') ? 'active' : '' }}">
            <a href="{{ route('tools_backup_database') }}" title="Backup Database"
                data-filter-tags="tools backup database">
                <span class="nav-link-text" data-i18n="nav.tools_backup_database">Backup Database</span>
            </a>
        </li>
        <li class="{{ Request::is('master/tools/tools_data_login*') ? 'active' : '' }}">
            <a href="{{ route('tools_data_login') }}" title="Data Login" data-filter-tags="tools data login">
                <span class="nav-link-text" data-i18n="nav.tools_data_login">Data Login</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('master/akademik/akademik*') ? 'active open' : '' }}">
    <a href="#" title="Akademik" data-filter-tags="akademik">
        <i class="fal fa-briefcase"></i>
        <span class="nav-link-text" data-i18n="nav.akademik">Akademik</span>
    </a>
    <ul>
        <li class="{{ Request::is('master/akademik/akademik_indentitas_sekolah*') ? 'active' : '' }}">
            <a href="{{ route('akademik_indentitas_sekolah') }}" title="Identitas Sekolah"
                data-filter-tags="akademik identitas sekolah">
                <span class="nav-link-text" data-i18n="nav.akademik_indentitas_sekolah">Identitas Sekolah</span>
            </a>
        </li>
        <li class="{{ Request::is('master/akademik/akademik_tenaga_pendidik*') ? 'active' : '' }}">
            <a href="{{ route('akademik_tenaga_pendidik') }}" title="Tenaga Pendidik"
                data-filter-tags="akademik tenaga pendidik">
                <span class="nav-link-text" data-i18n="nav.akademik_tenaga_pendidik">Tenaga Pendidik</span>
            </a>
        </li>
        <li class="{{ Request::is('master/akademik/akademik_paket_keahlian*') ? 'active' : '' }}">
            <a href="{{ route('akademik_paket_keahlian') }}" title="Paket Keahlian"
                data-filter-tags="akademik paket keahlian">
                <span class="nav-link-text" data-i18n="nav.akademik_paket_keahlian">Paket Keahlian</span>
            </a>
        </li>
        <li class="{{ Request::is('master/akademik/akademik_mata_pelajaran*') ? 'active' : '' }}">
            <a href="{{ route('akademik_mata_pelajaran') }}" title="Mata Pelajaran"
                data-filter-tags="akademik mata pelajaran">
                <span class="nav-link-text" data-i18n="nav.akademik_mata_pelajaran">Mata Pelajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('master/akademik/akademik_capaian_pembelajaran*') ? 'active' : '' }}">
            <a href="{{ route('akademik_capaian_pembelajaran') }}" title="Capaian Pembelajaran"
                data-filter-tags="akademik capaian pembelajaran">
                <span class="nav-link-text" data-i18n="nav.akademik_capaian_pembelajaran">Capaian Pembelajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('master/akademik/akademik_kelas_walikelas*') ? 'active' : '' }}">
            <a href="{{ route('akademik_kelas_walikelas') }}" title="Kelas dan Wali Kelas"
                data-filter-tags="akademik kelas dan wali kelas">
                <span class="nav-link-text" data-i18n="nav.akademik_kelas_walikelas">Kelas & Wali Kelas</span>
            </a>
        </li>
        <li class="{{ Request::is('master/akademik/akademik_peserta_didik*') ? 'active' : '' }}">
            <a href="{{ route('akademik_peserta_didik') }}" title="Peserta Didik"
                data-filter-tags="akademik peserta didik">
                <span class="nav-link-text" data-i18n="nav.akademik_peserta_didik">Peserta Didik</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('master/kurikulum/kurikulum*') ? 'active open' : '' }}">
    <a href="#" title="Kurikulum" data-filter-tags="kurikulum">
        <i class="fal fa-credit-card"></i>
        <span class="nav-link-text" data-i18n="nav.kurikulum">Kurikulum</span>
    </a>
    <ul>
        <li class="{{ Request::is('master/kurikulum/kurikulum_tahunajaran*') ? 'active' : '' }}">
            <a href="{{ route('kurikulum_tahunajaran') }}" title="Tahun Ajaran"
                data-filter-tags="kurikulum tahunajaran">
                <span class="nav-link-text" data-i18n="nav.kurikulum_tahunajaran">Tahun Ajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('master/kurikulum/kurikulum_versi*') ? 'active' : '' }}">
            <a href="{{ route('kurikulum_versi') }}" title="Versi Kurikulum"
                data-filter-tags="kurikulum versi kurikulum">
                <span class="nav-link-text" data-i18n="nav.kurikulum_versi">Versi Kurikulum</span>
            </a>
        </li>
        <li class="{{ Request::is('master/kurikulum/kurikulum_pengumuman*') ? 'active' : '' }}">
            <a href="{{ route('kurikulum_pengumuman') }}" title="Pengumuman"
                data-filter-tags="kurikulum pengumuman">
                <span class="nav-link-text" data-i18n="nav.kurikulum_pengumuman">Pengumuman</span>
            </a>
        </li>
        <li class="{{ Request::is('master/kurikulum/kurikulum_perakat_ujian*') ? 'active' : '' }}">
            <a href="{{ route('kurikulum_perakat_ujian') }}" title="Perangkat Ujian"
                data-filter-tags="kurikulum perangkat ujian">
                <span class="nav-link-text" data-i18n="nav.kurikulum_perakat_ujian">Perangkat Ujian</span>
            </a>
        </li>
        <li class="{{ Request::is('master/kurikulum/kurikulum_proses_kbm*') ? 'active open' : '' }}">
            <a href="javascript:void(0);') }}" title="Proses KBM" data-filter-tags="kurikulum proses kbm">
                <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm">Proses KBM</span>
            </a>
            <ul>
                <li class="{{ Request::is('master/kurikulum/kurikulum_proses_kbm_perkelas*') ? 'active' : '' }}">
                    <a href="{{ route('kurikulum_proses_kbm_perkelas') }}" title="Per Kelas"
                        data-filter-tags="kurikulum proses kbm perkelas">
                        <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm_perkelas">Per Kelas</span>
                    </a>
                </li>
                <li class="{{ Request::is('master/kurikulum/kurikulum_proses_kbm_perguru*') ? 'active' : '' }}">
                    <a href="{{ route('kurikulum_proses_kbm_perguru') }}" title="Per Guru"
                        data-filter-tags="kurikulum proses kbm perguru">
                        <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm_perguru">Per Guru</span>
                    </a>
                </li>
                <li class="{{ Request::is('master/kurikulum/kurikulum_proses_kbm_remedial') ? 'active' : '' }}">
                    <a href="{{ route('kurikulum_proses_kbm_remedial') }}" title="Remedial"
                        data-filter-tags="kurikulum proses kbm remedial">
                        <span class="nav-link-text" data-i18n="nav.kurikulum_proses_kbm_remedial">Remedial</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('master/kurikulum/kurikulum_cetak_rapor*') ? 'active' : '' }}">
            <a href="{{ route('kurikulum_cetak_rapor') }}" title="Cetak Rapor"
                data-filter-tags="kurikulum cetak rapor">
                <span class="nav-link-text" data-i18n="nav.kurikulum_cetak_rapor">Cetak Rapor</span>
            </a>
        </li>
        <li class="{{ Request::is('master/kurikulum/kurikulum_transkrip_nilai*') ? 'active' : '' }}">
            <a href="{{ route('kurikulum_transkrip_nilai') }}" title="Transkrip Nilai"
                data-filter-tags="kurikulum transkrip nilai">
                <span class="nav-link-text" data-i18n="nav.kurikulum_transkrip_nilai">Transkrip Nilai</span>
            </a>
        </li>
    </ul>
</li>
