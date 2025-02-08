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
            <a href=""><i class="fa fa-user"></i></a>
        </div>
        <ul class="main-menu">
            <li class="active"><a href="{{url('/')}}">Beranda</a></li>
           
            <li class="dropdown">
                <a href="#">Profil <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('sambutan-kepala-sekolah')}}">Sambutan Kepala Sekolah</a></li>
                    <li><a href="{{url('tentang')}}">Tentang Sekolah</a></li>
                    <li><a href="{{url('visi-misi')}}">Visi & Misi</a></li>
                   
                </ul>
            </li>

			<li class="dropdown">
                <a href="#">Sekolah Kami <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
				<li><a href="{{url('sarana-prasarana')}}">Sarana & Prasarana</a></li>
                    <li><a href="{{url('program-unggulan')}}">Program Unggulan</a></li>
                    <li><a href="{{url('extrakurikuler')}}">Extrakurikuler</a></li>
                </ul>
            </li>

			<li class="dropdown">
                <a href="#">Informasi <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('kalender-akademik',date('Y'))}}">Kalender Akademik</a></li>
                    <li><a href="{{url('ppdb')}}">PPDB</a></li>
                    <li><a href="{{url('siswa-berprestasi')}}">Siswa Berprestasi</a></li>
                </ul>
            </li>

			<li><a href="{{url('berita')}}">Berita</a></li>
			<li><a href="{{url('galeri')}}">Galeri</a></li>

            <li class="dropdown">
                <a href="#">Publikasi <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('informasi')}}">Informasi</a></li>
                    <li><a href="{{url('artikel')}}">Artikel</a></li>
                </ul>
            </li>
            <li><a href="{{url('kontak')}}">Kontak</a></li>
        </ul>
    </div>
</nav>