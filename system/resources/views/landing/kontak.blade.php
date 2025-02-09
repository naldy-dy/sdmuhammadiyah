@extends('landing.layout')
@section('content')


<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						<h4>Alamat</h4>
						<p>{{ucwords($profil->alamat_lengkap)}}</p>
					</div>
					<div class="contact-info">
						<h4>Phone/WA</h4>
						<p>{{$profil->no_wa}}</p>
					</div>
					<div class="contact-info">
						<h4>Email</h4>
						<p>{{ucwords($profil->email)}}</p>
					</div>
					<div class="contact-info">
						<h4>Waktu Pelajaran</h4>
						<p>{{ucwords($profil->waktu_pelajaran)}}</p>
					</div>
				</div>
				{!!nl2br($profil->maps)!!}
				
			</div>
		</div>
	</section>
@endsection