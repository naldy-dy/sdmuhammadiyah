<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="{{url('public')}}/assets/img/logo-light.png" alt="">
						<p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">USEFUL LINK</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">About us</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Events</a></li>
							<li><a href="">Features</a></li>
						</ul>
						<ul>
							<li><a href="">Policy</a></li>
							<li><a href="">Term</a></li>
							<li><a href="">Help</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Site map</a></li>
						</ul>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">RECENT POST</h6>
					<ul class="recent-post">
						<li>
							<p>Snackable study:How to break <br> up your master's degree</p>
							<span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
						</li>
						<li>
							<p>Open University plans major <br> cuts to number of staff</p>
							<span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
						</li>
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SD Muhammadiya 3 Pontianak 
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
	