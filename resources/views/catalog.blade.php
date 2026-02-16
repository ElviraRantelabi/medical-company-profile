@extends('layouts.app')

@section('content')


	<!-- Lifesafe Mobile Menu Area -->
	<div class="mobile-menu-area sticky-menu" id="navbar">
		<div class="mobile-menu">
			<div class="mobile-logo">
				<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
			</div>
			<div class="side-menu-info">
				<div class="sidebar-menu">
					<a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- Start Breatcome Area -->
	<!--==================================================-->
	<div class="breatcome-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breatcome-content">
						<div class="breatcome-title">
							<h1>Our Catalog</h1>
						</div>
						<div class="section-main-title text-center text-white">
   							 <h3>Discover high-quality, certified medical equipment designed to support hospitals, clinics, and healthcare professionals.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Breatcome Area -->
	<!--==================================================-->


	<div class="service-area inner-page">
    <div class="container">

   <div class="row">
		<div class="col-lg-12">
			<div class="section-title text-center wow fadeInUp">
				<div class="section-sub-title">
					<h4>Our Medical Equipment Catalog</h4>
				</div>
			</div>
		</div>
	</div>

<!-- Dropdown Row -->
	<div class="row mt-3 mb-5">
		<div class="col-lg-3 col-md-4">
			<select class="form-select category-dropdown">
				<option selected>All Categories</option>
				<option value="diagnostic">Diagnostic Equipment</option>
				<option value="surgical">Surgical Tools</option>
				<option value="monitoring">Patient Monitoring</option>
				<option value="laboratory">Laboratory Equipment</option>
			</select>
		</div>
	</div>

    <div class="row g-4">
      
	<div class="col-lg-4 col-md-6">
		<div class="service-single-box wow fadeInUp">
			<div class="service-thumb">
				<img src="{{ asset('assets/images/service/service1.png') }}" alt="">
				<div class="service-icon">
					<img src="{{ asset('assets/images/service/service-icon1.png') }}" alt="">
				</div>
			</div>
			<div class="service-content">
				<h4>Family Insurance</h4>
				<p>The trust then manages the policy and pays the premiums.</p>

				<a href="/catalog-detail" class="service-read-more">
					Read More →
				</a>
			</div>
		</div>
	</div>


	<div class="col-lg-4 col-md-6">
		<div class="service-single-box wow fadeInUp">
			<div class="service-thumb">
				<img src="{{ asset('assets/images/service/service1.png') }}" alt="">
				<div class="service-icon">
					<img src="{{ asset('assets/images/service/service-icon1.png') }}" alt="">
				</div>
			</div>
			<div class="service-content">
				<h4>Family Insurance</h4>
				<p>The trust then manages the policy and pays the premiums.</p>


				<a href="#" class="service-read-more">
					Read More →
				</a>
			</div>
		</div>
	</div>



	<div class="col-lg-4 col-md-6">
		<div class="service-single-box wow fadeInUp">
			<div class="service-thumb">
				<img src="{{ asset('assets/images/service/service1.png') }}" alt="">
				<div class="service-icon">
					<img src="{{ asset('assets/images/service/service-icon1.png') }}" alt="">
				</div>
			</div>
			<div class="service-content">
				<h4>Family Insurance</h4>
				<p>The trust then manages the policy and pays the premiums.</p>


				<a href="#" class="service-read-more">
					Read More →
				</a>
			</div>
		</div>
	</div>


	<div class="col-lg-4 col-md-6">
		<div class="service-single-box wow fadeInUp">
			<div class="service-thumb">
				<img src="{{ asset('assets/images/service/service1.png') }}" alt="">
				<div class="service-icon">
					<img src="{{ asset('assets/images/service/service-icon1.png') }}" alt="">
				</div>
			</div>
			<div class="service-content">
				<h4>Family Insurance</h4>
				<p>The trust then manages the policy and pays the premiums.</p>

				<a href="#" class="service-read-more">
					Read More →
				</a>
			</div>
		</div>
	</div>


	<div class="col-lg-4 col-md-6">
		<div class="service-single-box wow fadeInUp">
			<div class="service-thumb">
				<img src="{{ asset('assets/images/service/service1.png') }}" alt="">
				<div class="service-icon">
					<img src="{{ asset('assets/images/service/service-icon1.png') }}" alt="">
				</div>
			</div>
			<div class="service-content">
				<h4>Family Insurance</h4>
				<p>The trust then manages the policy and pays the premiums.</p>


				<a href="#" class="service-read-more">
					Read More →
				</a>
			</div>
		</div>
	</div>


	<div class="col-lg-4 col-md-6">
		<div class="service-single-box wow fadeInUp">
			<div class="service-thumb">
				<img src="{{ asset('assets/images/service/service1.png') }}" alt="">
				<div class="service-icon">
					<img src="{{ asset('assets/images/service/service-icon1.png') }}" alt="">
				</div>
			</div>
			<div class="service-content">
				<h4>Family Insurance</h4>
				<p>The trust then manages the policy and pays the premiums.</p>

				<a href="#" class="service-read-more">
					Read More →
				</a>
			</div>
		</div>
	</div>

        </div>
    </div>
</div>


	<!--==================================================-->
	<!-- Start Protection Area -->
	<!--==================================================-->
	<div class="protection-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4"></div>
				<div class="col-lg-4 col-md-6">
					<div class="protection-content">
						<h4>Need More Information About Our Products?</h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="Lifesafe-btn protection">
						<a href="#">Contact Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Protection Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start Blog Area -->
	<!--==================================================-->
	<div class="blog-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="section-main-title">
							<h2>latest updates & information</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog-single-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="blog-content">
							<div class="blog-month">
								<h4>02</h4>
								<span>DEC</span>
							</div>
							<div class="blog-text">
								<h4><a href="blog-details.html">Earn good money and make</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
						<div class="blog-thumb">
							<img src="assets/images/blog/blog1.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-single-box wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="blog-content">
							<div class="blog-month">
								<h4>05</h4>
								<span>DEC</span>
							</div>
							<div class="blog-text">
								<h4><a href="blog-details.html">Avenue money and make</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
						<div class="blog-thumb">
							<img src="assets/images/blog/blog2.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-single-box wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="blog-content">
							<div class="blog-month">
								<h4>07</h4>
								<span>DEC</span>
							</div>
							<div class="blog-text">
								<h4><a href="blog-details.html">Earn good money and make</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
						<div class="blog-thumb">
							<img src="assets/images/blog/blog3.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Blog Area -->
	<!--==================================================-->


	
	<!--==================================================-->
	<!-- Start Footer Area -->
	<!--==================================================-->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>Quick link</h4>
						</div>
						<div class="footer-wiget-menu">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">Our Mission</a></li>
								<li><a href="#">Latest News</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget inner2 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>Our Service</h4>
						</div>
						<div class="footer-wiget-menu">
							<ul>
								<li><a href="#">Travel Insurance</a></li>
								<li><a href="#">Life Insurance</a></li>
								<li><a href="#">House Insurance</a></li>
								<li><a href="#">Car Insurance</a></li>
								<li><a href="#">Family Insurance</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget inner">
						<div class="footer-wiget-logo">
							<a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a>
						</div>
						<div class="footer-wiget-text">
							<h4>Feugiat a ligula rutrum luctus primis ultrice nteger congue magna at pretium purus a
								pretium ligula rutrum and luctus</h4>
						</div>
						<div class="footer-social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 pr-0">
					<div class="footer-wiget inner3 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>Working Hours</h4>
						</div>
						<div class="company-work-hour">
							<ul>
								<li>Mon - Wed <span class="table-text">8.00 AM - 5.00 PM</span></li>
								<li>Thu - Fri <span>9.00 AM - 4.00 PM</span></li>
								<li>Saturday <span>9.00 AM - 2.00 PM</span></li>
								<li class="table-brb">Sunday <span class="style">Clossed</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Footer Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start scrollup section Area -->
	<!--==================================================-->
	<!-- scrollup section -->
	<div class="prgoress_scrollup">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<!--==================================================-->
	<!-- End scrollup section Area -->
	<!--==================================================-->
	@endsection