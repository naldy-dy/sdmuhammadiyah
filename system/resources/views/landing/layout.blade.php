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


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Beranda</a> <i class="fa fa-angle-right"></i>
			<span>{{$title ?? ''}}</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>{{$title ?? ''}}</h3>
			</div>
			@yield('content')
		</div>
	</section>
	<!-- About section end-->


	<!-- Footer section -->
	@include('landing.footer')
	<!-- Footer section end-->

	


</body>
</html>