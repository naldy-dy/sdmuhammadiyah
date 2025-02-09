<!DOCTYPE html>
<html lang="en">
<head>
	@include('landing.assets')
</head>
<body>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	@include('landing.header')
	<!-- header section end-->


	<!-- Header section  -->
	@include('landing.navbar')
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{$profil->gambar_utama}}">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-10">
								<div class="hs-subtitle">Selamat Datang</div>
								<h2 class="hs-title">{{$profil->judul ?? 'Website Resmi SD Muhammadiyah Pontianak'}}</h2>
								<p class="hs-des">{{$profil->deskripsi ?? 'Semua informasi dapat anda cari disini'}}</p>
								<div class="site-btn">PPDB Sekolah</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			@foreach($list_slider as $item)
			<div class="hs-item set-bg" data-setbg="{{url($item->foto)}}">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-10">
								<h2 class="hs-title">{{ucwords($item->judul)}}.</h2>
								<p class="hs-des">{!!nl2br($item->deskripsi)!!}</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

			

		</div>
	</section>
	<!-- Hero section end -->


	<!-- Counter section  -->
	<section class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="big-icon">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="counter-content">
						<h2>Pembukaan PPDB Dalam Waktu</h2>
						<p><i class="fa fa-calendar-o"></i>07:00 PM - 09:00 PM</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="counter">
						<div class="counter-item"><h4>20</h4>Days</div>
						<div class="counter-item"><h4>08</h4>Hrs</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>56</h4>secs</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Counter section end -->


	<!-- Services section -->
	<section class="service-section spad">
		<div class="container services">
			<div class="section-title text-center">
				<h3>Sambutan Kepala Sekolah</h3>
			</div>
			<div class="row">
			<div class="col-md-4">
				<center>
					<img src="{{$profil->foto_kepsek}}" width="100%" alt="">
				</center>
			</div>
			<div class="col-md-8">
				{!!nl2br($profil->sambutan_kepsek)!!}
			</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

	
	<!-- Enroll section -->
	<section class="enroll-section spad set-bg" data-setbg="{{$profil->gambar_utama}}">
		<div class="container">
		<div class="section-title text-white text-center">
				<h3>Extrakurikuler Kami</h3>
			</div>
			<div class="row">
				
			</div>
		</div>
	</section>
	<!-- Enroll section end -->


	<!-- Courses section -->
	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Berita Terbaru</h3>
				<p>Informasi berita terbaru dari kami</p>
			</div>=
			<div class="row">
				@foreach($list_berita->take(4) as $item)
				<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="{{url($item->cover)}}"></div>
						<div class="blog-content">
							<b><a href="{{url('berita',$item->slug)}}" class="text-dark"> {{ucwords(Str::limit($item->judul,60))}}</a></b>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> {{$item->created_at}}</span>
								<span><i class="fa fa-eye"></i> {{$item->viewer}}x</span>
							</div>
							<p>{!!nl2br(Str::limit($item->isi,100))!!}</p>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Fact section -->
	<section class="fact-section spad set-bg" data-setbg="{{url('public')}}/assets-landing/img/fact-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-crown"></i>
					</div>
					<div class="fact-text">
						<h2>50</h2>
						<p>Ruangan</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-briefcase"></i>
					</div>
					<div class="fact-text">
						<h2>80</h2>
						<p>Pengajar</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-user"></i>
					</div>
					<div class="fact-text">
						<h2>500</h2>
						<p>Siswa & Alumni</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-pencil-alt"></i>
					</div>
					<div class="fact-text">
						<h2>A</h2>
						<p>Akreditasi</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end-->


	<!-- Event section -->
	<section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Event & Kegiatan</h3>
				<p>Event & Kegiatan yang akan diselenggarakan</p>
			</div>
			<div class="row">
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="{{url('public')}}/assets/img/event/1.jpg" alt="">
						<div class="event-date">
							<span>24 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>The dos and don'ts of writing a personal<br>statement for languages</h4>
						<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="{{url('public')}}/assets/img/event/2.jpg" alt="">
						<div class="event-date">
							<span>22 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>University interview tips:<br>confidence won't make up for flannel</h4>
						<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Event section end -->


	<!-- Gallery section -->
	<div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
			
			<div class="gallery-item gi-big set-bg" data-setbg="{{url('public')}}/assets-landing/img/gallery/1.jpg">
				<a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
			</div>

			<div class="gallery-item gi-big set-bg" data-setbg="{{url('public')}}/assets-landing/img/gallery/1.jpg">
				<a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
			</div>

			<div class="gallery-item gi-big set-bg" data-setbg="{{url('public')}}/assets-landing/img/gallery/1.jpg">
				<a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
			</div>

			<div class="gallery-item gi-big set-bg" data-setbg="{{url('public')}}/assets-landing/img/gallery/1.jpg">
				<a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
			</div>
			
		</div>
	</div>
	<!-- Gallery section -->


	


	<!-- Newsletter section -->
	
	<!-- Newsletter section end -->	


	<!-- Footer section -->
	@include('landing.footer')
</body>
</html>