<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="{{url('/')}}" class="site-logo"><img src="{{$profil->logo_sekolah ?? ''}}" width="60px" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Waktu Pelajaran:</span>{{$profil->waktu_pelajaran ?? ''}}</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Alamat:</span>{{Str::limit($profil->alamat_lengkap ?? '',50)}}</p>
				</div>
			</div>
		</div>
	</header>