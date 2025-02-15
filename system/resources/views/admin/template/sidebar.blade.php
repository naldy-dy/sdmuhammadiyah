@php

if (!function_exists('checkRouteActive')) {
    function checkRouteActive($route)
    {
        return request()->is($route) ? 'active' : '';
    }
}
@endphp
<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ checkRouteActive('admin/beranda') }}">
        <a href="{{ url('admin/beranda') }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub {{ checkRouteActive('admin/data-sekolah*') }}">
        <a href="#" class='sidebar-link'>
            <i class="fa fa-database"></i>
            <span>Data Sekolah</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item {{ checkRouteActive('admin/data-sekolah/siswa') }}">
                <a href="{{ url('admin/siswa') }}">Data Siswa</a>
            </li>
            
            <li class="submenu-item {{ checkRouteActive('admin/guru') }}">
                <a href="{{ url('admin/guru') }}">Data Guru</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub {{ checkRouteActive('admin/program*') }}">
        <a href="#" class='sidebar-link'>
            <i class="fa fa-book"></i>
            <span>Program Sekolah</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item {{ checkRouteActive('admin/program-unggulan') }}">
                <a href="{{ url('admin/program-unggulan') }}">Program Unggulan</a>
            </li>
            <li class="submenu-item {{ checkRouteActive('admin/extrakurikuler') }}">
                <a href="{{ url('admin/extrakurikuler') }}">Extrakurikuler</a>
            </li>
            <li class="submenu-item {{ checkRouteActive('admin/sarana-prasarana') }}">
                <a href="{{ url('admin/sarana-prasarana') }}">Sarana & Prasarana</a>
            </li>
            <li class="submenu-item {{ checkRouteActive('admin/kalender-akademik',date('Y')) }}">
                <a href="{{ url('admin/kalender-akademik',date('Y')) }}">Kalender Akademik</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub {{ checkRouteActive('admin/media*') }}">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-collection-fill"></i>
            <span>Media</span>
        </a>
        <ul class="submenu">
        <li class="submenu-item {{ checkRouteActive('admin/galeri') }}">
                <a href="{{ url('admin/galeri') }}">Galeri Kegiatan</a>
            </li>

            <li class="submenu-item {{ checkRouteActive('admin/siswa-berprestasi') }}">
                <a href="{{ url('admin/siswa-berprestasi') }}">Siswa Berprestasi</a>
            </li>

            <li class="submenu-item {{ checkRouteActive('admin/slider') }}">
                <a href="{{ url('admin/slider') }}">Slide Website</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub {{ checkRouteActive('admin/berita*') }}">
        <a href="#" class='sidebar-link'>
            <i class="fa fa-globe"></i>
            <span>Publikasi</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item {{ checkRouteActive('admin/berita') }}">
                <a href="{{ url('admin/berita') }}">Berita</a>
            </li>
            <li class="submenu-item {{ checkRouteActive('admin/artikel') }}">
                <a href="{{ url('admin/artikel') }}">Artikel</a>
            </li>
            <li class="submenu-item {{ checkRouteActive('admin/informasi') }}">
                <a href="{{ url('admin/informasi') }}">Informasi</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub {{ checkRouteActive('admin/ppdb*') }}">
        <a href="#" class='sidebar-link'>
            <i class="fa fa-graduation-cap"></i>
            <span>PPDB</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item {{ checkRouteActive('admin/ppdb') }}">
                <a href="{{ url('admin/ppdb', date('Y')) }}">Data Penerimaan Siswa</a>
            </li>
            <li class="submenu-item {{ checkRouteActive('admin/ppdb/config') }}">
                <a href="{{ url('admin/ppdb/config') }}">Config PPDB</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item {{ checkRouteActive('admin/profil-sekolah*') }}">
        <a href="{{ url('admin/profil-sekolah') }}" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Profil Sekolah</span>
        </a>
    </li>

    <li class="sidebar-item {{ checkRouteActive('admin/profil-akun') }}">
        <a href="{{ url('admin/profil-akun') }}" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Profil Akun</span>
        </a>
    </li>

      <li class="sidebar-item {{ checkRouteActive('admin/profil-akun') }}">
        <a href="{{ url('logout') }}" onclick="return confirm('Yakin untuk keluar')" class='sidebar-link'>
            <i class="fa fa-key"></i>
            <span>Logout</span>
        </a>
    </li>
</ul>
