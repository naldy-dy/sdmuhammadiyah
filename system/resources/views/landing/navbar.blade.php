<style>
    .main-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }
    .main-menu li {
        position: relative;
        padding: 10px;
    }
    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: #17022e;
        list-style: none;
        padding: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .dropdown:hover .dropdown-menu {
        display: block;
    }
    .dropdown-menu li {
        padding: 5px 10px;
    }
	 /* Mobile styles */
	  /* Mobile styles */
	  @media (max-width: 768px) {
        .menu-toggle {
            display: block;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            z-index: 1100;
        }
        .main-menu {
            display: none;
            flex-direction: column;
            width: 100%;
            background: #17022e;
            position: absolute;
            top: 50px;
            left: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .main-menu.active {
            display: flex;
        }
    }
</style>
	<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            <a href=""><i class="fa fa-search"></i></a>
            <a href="{{url('login')}}"><i class="fa fa-user"></i></a>
        </div>
        <ul class="main-menu">
    <li class="{{ request()->is('/') ? 'active' : '' }}">
        <a href="{{ url('/') }}">Beranda</a>
    </li>

    <li class="dropdown">
        <a href="#">Profil <i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu">
            <li class="{{ request()->is('sambutan-kepala-sekolah') ? 'active' : '' }}">
                <a href="{{ url('sambutan-kepala-sekolah') }}">Sambutan Kepala Sekolah</a>
            </li>
            <li class="{{ request()->is('tentang') ? 'active' : '' }}">
                <a href="{{ url('tentang') }}">Tentang Sekolah</a>
            </li>
            <li class="{{ request()->is('visi-misi') ? 'active' : '' }}">
                <a href="{{ url('visi-misi') }}">Visi & Misi</a>
            </li>

            <li class="{{ request()->is('guru') ? 'active' : '' }}">
                <a href="{{ url('guru') }}">Data Guru</a>
            </li>
            
        </ul>
    </li>

    <li class="dropdown {{ request()->is('sarana-prasarana', 'program-unggulan', 'extrakurikuler') ? 'active' : '' }}">
        <a href="#">Sekolah Kami <i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu">
            <li class="{{ request()->is('sarana-prasarana') ? 'active' : '' }}">
                <a href="{{ url('sarana-prasarana') }}">Sarana & Prasarana</a>
            </li>
            <!-- <li class="{{ request()->is('program-unggulan') ? 'active' : '' }}">
                <a href="{{ url('program-unggulan') }}">Program Unggulan</a>
            </li> -->
            <li class="{{ request()->is('extrakurikuler') ? 'active' : '' }}">
                <a href="{{ url('extrakurikuler') }}">Extrakurikuler</a>
            </li>
        </ul>
    </li>

    <li class="dropdown {{ request()->is('kalender-akademik', 'ppdb', 'siswa-berprestasi') ? 'active' : '' }}">
        <a href="#">Informasi <i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu">
            <li class="{{ request()->is('kalender-akademik') ? 'active' : '' }}">
                <a href="{{ url('kalender-akademik', date('Y')) }}">Kalender Akademik</a>
            </li>
            <li class="{{ request()->is('ppdb') ? 'active' : '' }}">
                <a href="{{ url('ppdb') }}">PPDB</a>
            </li>
            <li class="{{ request()->is('siswa-berprestasi') ? 'active' : '' }}">
                <a href="{{ url('siswa-berprestasi') }}">Siswa Berprestasi</a>
            </li>
        </ul>
    </li>

    <li class="{{ request()->is('berita*') ? 'active' : '' }}">
        <a href="{{ url('berita') }}">Berita</a>
    </li>
    <li class="{{ request()->is('galeri') ? 'active' : '' }}">
        <a href="{{ url('galeri') }}">Galeri</a>
    </li>

    <li class="dropdown {{ request()->is('informasi', 'artikel') ? 'active' : '' }}">
        <a href="#">Publikasi <i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu">
            <li class="{{ request()->is('informasi') ? 'active' : '' }}">
                <a href="{{ url('informasi') }}">Informasi</a>
            </li>
            <li class="{{ request()->is('artikel') ? 'active' : '' }}">
                <a href="{{ url('artikel') }}">Artikel</a>
            </li>
        </ul>
    </li>

    <li class="{{ request()->is('kontak') ? 'active' : '' }}">
        <a href="{{ url('kontak') }}">Kontak</a>
    </li>
</ul>

    </div>
</nav>