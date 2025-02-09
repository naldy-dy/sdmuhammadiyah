<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="{{$profil->logo_sekolah}}" width="100%" alt="">
						
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-5 footer-widget">
    <h6 class="fw-title"> LINK</h6>
    <div class="dobule-link">
        <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('tentang') }}">Tentang Sekolah</a></li>
            <li><a href="{{ url('sambutan-kepala-sekolah') }}">Sambutan Kepala Sekolah</a></li>
            <li><a href="{{ url('visi-misi') }}">Visi & Misi</a></li>
            <li><a href="{{ url('guru') }}">Data Guru</a></li>
        </ul>
    </div>
</div>

				
				<!-- widget -->
				<div class="col-sm-6 col-lg-4 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> {{$profil->alamat_lengkap ?? ''}}</p></li>
						<li><p><i class="fa fa-phone"></i> {{$profil->no_wa ?? ''}}</p></li>
						<li><p><i class="fa fa-envelope"></i> {{$profil->email ?? ''}}</p></li>
						<li><p><i class="fa fa-clock-o"></i> {{$profil->waktu_pelajaran ?? ''}}</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SD Muhammadiya 3 Pontianak  <br>
					<b>Developer By <a href="developer">Kayong Developer | N-Project</a></b>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->

	<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.querySelector(".menu-toggle");
        const mainMenu = document.querySelector(".main-menu");

        menuToggle.addEventListener("click", function() {
            mainMenu.classList.toggle("active");
        });
    });
</script>
	
	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('public')}}/assets-landing/js/jquery-3.2.1.min.js"></script>
	<script src="{{url('public')}}/assets-landing/js/owl.carousel.min.js"></script>
	<script src="{{url('public')}}/assets-landing/js/jquery.countdown.js"></script>
	<script src="{{url('public')}}/assets-landing/js/masonry.pkgd.min.js"></script>
	<script src="{{url('public')}}/assets-landing/js/magnific-popup.min.js"></script>
	<script src="{{url('public')}}/assets-landing/js/main.js"></script>
	