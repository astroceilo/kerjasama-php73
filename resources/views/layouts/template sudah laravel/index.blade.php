<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>Charles-Business-Consulting HTML Template</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets') }}/front/images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/front/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/front/css/responsive.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			

			<!-- 
			=============================================
				Theme Header One
			============================================== 
			-->
			<header class="header-one">
				<div class="top-header">
					<div class="container clearfix">
						<div class="logo float-left"><a href="index.html"><img src="{{ asset('assets') }}/front/images/logo/logo.png" alt=""></a></div>
						<div class="address-wrapper float-right">
							<ul>
								<li class="address">
									<i class="icon flaticon-placeholder"></i>
									<h6>Address:</h6>
									<p>2A0, Queenstown St, USA.</p>
								</li>
								<li class="address">
									<i class="icon flaticon-multimedia"></i>
									<h6>Mail us:</h6>
									<p>supporthere@mail.com</p>
								</li>
								<li class="quotes"><a href="#">GET A QUOTES</a></li>
							</ul>
						</div> <!-- /.address-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="active"><a href="#">Home</a>
									    	<ul class="dropdown">
									        	<li><a href="/index">Home version one</a></li>
									        	<li><a href="/index-2">Home version two</a></li>
									      </ul>
									    </li>
									    <li><a href="#">PAGES</a>
									    	<ul class="dropdown">
									    		<li><a href="/about">About us</a></li>
									    		<li><a href="/team">Our team</a></li>
									    		<li><a href="/faq">Faq's</a></li>
									    		<li><a href="/404">404</a></li>
									    		<li><a href="/shop">Shop</a></li>
									    		<li><a href="/shop-details">Shop details</a></li>
									            <li><a href="#">Third Level menu</a>
									    			<ul>
									    				<li><a href="#">Demo one</a></li>
									    				<li><a href="#">Demo two</a></li>
									    			</ul>
									    		</li>
									       </ul>
									    </li>
									    <li><a href="#">Service</a>
									    	<ul class="dropdown">
									        	<li><a href="/service">Service Version one</a></li>
									        	<li><a href="/service-v2">Service version two</a></li>
									        	<li><a href="/service-details">Service Details</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Portfolio</a>
									    	<ul class="dropdown">
									        	<li><a href="/project">project</a></li>
									        	<li><a href="/project-details">Project details</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Blog</a>
									    	<ul class="dropdown">
									        	<li><a href="/blog">Blog List</a></li>
									        	<li><a href="/blog-grid">Blog Grid</a></li>
									        	<li><a href="/blog-details">Blog details</a></li>
									       </ul>
									    </li>
									    <li><a href="contact">contact</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<div class="right-widget float-right">
					   			<ul>
					   				<li class="social-icon">
					   					<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										</ul>
					   				</li>
					   				<li class="cart-icon">
					   					<a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
					   				</li>
					   				<li class="search-option">
					   					<div class="dropdown">
					   						<button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
											<form action="#" class="dropdown-menu">
												<input type="text" Placeholder="Enter Your Search">
												<button><i class="fa fa-search"></i></button>
											</form>
					   					</div>
					   				</li>
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-one -->

			
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-one">
				<div data-src="{{ asset('assets') }}/front/images/home/slide-1.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="{{ asset('assets') }}/front/images/home/slide-2.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="{{ asset('assets') }}/front/images/home/slide-3.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
			</div> <!-- /#theme-main-banner -->
			
			
			<!-- 
			=============================================
				Top Feature
			============================================== 
			-->
			<div class="top-feature section-spacing">
				<div class="top-features-slide">
					<div class="item">
						<div class="main-content" style="background:#fafafa;">
							<img src="{{ asset('assets') }}/front/images/icon/1.png" alt="">
							<h4><a href="#">Consumer Insights</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#f6f6f6;">
							<img src="{{ asset('assets') }}/front/images/icon/2.png" alt="">
							<h4><a href="#">Emerging Ideas</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#efefef;">
							<img src="{{ asset('assets') }}/front/images/icon/3.png" alt="">
							<h4><a href="#">Thought Leadership</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#e9e9e9;">
							<img src="{{ asset('assets') }}/front/images/icon/4.png" alt="">
							<h4><a href="#">Marketing Goals</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
				</div> <!-- /.top-features-slide -->
			</div> <!-- /.top-feature -->


			<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12"><img src="{{ asset('assets') }}/front/images/home/1.jpg" alt=""></div>
						<div class="col-lg-6 col-12">
							<div class="text">
								<div class="theme-title-one">
									<h2>About Our Company</h2>
									<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family.</p>
									<p>The government they survive as soldiers of fortune baby if you've ever wondered the east side to a deluxe apartment.</p>
								</div> <!-- /.theme-title-one -->
								<ul class="mission-goal clearfix">
									<li>
										<i class="icon flaticon-star"></i>
										<h4>Vision</h4>
									</li>
									<li>
										<i class="icon flaticon-medal"></i>
										<h4>Missions</h4>
									</li>
									<li>
										<i class="icon flaticon-target"></i>
										<h4>Goals</h4>
									</li>
								</ul> <!-- /.mission-goal -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay -->


			<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2>We provide high quality services &amp; innovative solutions for the realiable growth</h2>
						<a href="#" class="theme-button-one">GET A QUOTES</a>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


			<!-- 
			=============================================
				Service Style One
			============================================== 
			-->
			<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our SERVICES</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('assets') }}/front/images/home/3.jpg" alt=""></div>
									<div class="text">
										<h5><a href="service-details.html">Business Services</a></h5>
										<p>The tiny ship today stiller</p>
										<a href="service-details.html" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('assets') }}/front/images/home/4.jpg" alt=""></div>
									<div class="text">
										<h5><a href="service-details.html">Consumer Product</a></h5>
										<p>The tiny ship today stiller</p>
										<a href="service-details.html" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('assets') }}/front/images/home/5.jpg" alt=""></div>
									<div class="text">
										<h5><a href="service-details.html">Financial Services</a></h5>
										<p>The tiny ship today stiller</p>
										<a href="service-details.html" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('assets') }}/front/images/home/6.jpg" alt=""></div>
									<div class="text">
										<h5><a href="service-details.html">Travel and Aviation</a></h5>
										<p>The tiny ship today stiller</p>
										<a href="service-details.html" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('assets') }}/front/images/home/7.jpg" alt=""></div>
									<div class="text">
										<h5><a href="service-details.html">Software Research</a></h5>
										<p>The tiny ship today stiller</p>
										<a href="service-details.html" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('assets') }}/front/images/home/8.jpg" alt=""></div>
									<div class="text">
										<h5><a href="service-details.html">Quality Resourcing</a></h5>
										<p>The tiny ship today stiller</p>
										<a href="service-details.html" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					<div class="contact-text">
						<h4>You can also send us an email and we’ll get in touch shortly, or Call us</h4>
						<h5><a href="#">info@support.com</a>  (or)  <a href="#">+1 234 6780 900</a></h5>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->


			<!--
			=====================================================
				Testimonial Slider
			=====================================================
			-->
			<div class="testimonial-section section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="wrapper">
							<div class="bg">
								<div class="testimonial-slider">
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Shawn Michael</h6>
											<span>Founder, Mnc Inc.</span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Rashed Ka.</h6>
											<span>Founder, Mnc Inc.</span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Mahfuz Riad</h6>
											<span>Founder, Mnc Inc.</span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
								</div> <!-- /.testimonial-slider -->
							</div> <!-- /.bg -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.testimonial-section -->


			<!--
			=====================================================
				Our Team
			=====================================================
			-->
			<div class="our-team section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our TEAM</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="team-member">
									<div class="image-box">
										<img src="{{ asset('assets') }}/front/images/team/1.jpg" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p>The government they survive as soldiers of fortune.</p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->
									<div class="text">
										<h6>Richards Mills</h6>
										<span>Sales Consultant</span>
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="team-member">
									<div class="image-box">
										<img src="{{ asset('assets') }}/front/images/team/2.jpg" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p>The government they survive as soldiers of fortune.</p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->
									<div class="text">
										<h6>Mike Hussey</h6>
										<span>Founder, CEO</span>
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="team-member">
									<div class="image-box">
										<img src="{{ asset('assets') }}/front/images/team/3.jpg" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p>The government they survive as soldiers of fortune.</p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->
									<div class="text">
										<h6>Jenilia D’sosa</h6>
										<span>Marketing Lead</span>
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="team-member">
									<div class="image-box">
										<img src="{{ asset('assets') }}/front/images/team/4.jpg" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p>The government they survive as soldiers of fortune.</p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->
									<div class="text">
										<h6>David Warner</h6>
										<span>SEO Analyst</span>
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-team -->


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
			<div class="theme-counter section-spacing">
				<div class="container">
					<div class="bg">
						<h6>Company Success</h6>
						<h2>Some fun facts about our consulting</h2>

						<div class="cunter-wrapper">
							<div class="row">
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="30" data-speed="1200" data-refresh-interval="5">0</span>+</div>
				        				<p>Years of Excellence</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5">0</span>%</div>
				        				<p>Client Satisfaction</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5">0</span>k</div>
				        				<p>Cases Completed</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5">0</span></div>
				        				<p>Consultants</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
							</div> <!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
						<a href="#" class="theme-button-one">VIEW CASE STUDIES</a>
					</div> <!-- /.bg -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter -->


			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			<div class="consultation-form section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>FREE CONSULTATION</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-xl-6 col-lg-7 col-12">
							<div class="form-wrapper">
								<form action="#" class="theme-form-one">
									<div class="row">
										<div class="col-md-6"><input type="text" placeholder="Name *"></div>
										<div class="col-md-6"><input type="text" placeholder="Phone *"></div>
										<div class="col-md-6"><input type="email" placeholder="Email *"></div>
										<div class="col-md-6">
											<select class="form-control" id="exampleSelect1">
										      <option>Service you’re looking for?</option>
										      <option>Business Services</option>
										      <option>Consumer Product</option>
										      <option>Financial Services</option>
										      <option>Software Research</option>
										    </select>
										</div>
										<div class="col-12"><textarea placeholder="Message"></textarea></div>
									</div> <!-- /.row -->
									<button class="theme-button-one">GET A QUOTES</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.consultation-form -->



			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
			<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR <br>PARTNERS</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
								<div class="item"><img src="{{ asset('assets') }}/front/images/logo/p-1.png" alt=""></div>
								<div class="item"><img src="{{ asset('assets') }}/front/images/logo/p-2.png" alt=""></div>
								<div class="item"><img src="{{ asset('assets') }}/front/images/logo/p-3.png" alt=""></div>
								<div class="item"><img src="{{ asset('assets') }}/front/images/logo/p-4.png" alt=""></div>
								<div class="item"><img src="{{ asset('assets') }}/front/images/logo/p-5.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section -->


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-one">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-sm-6 about-widget">
								<h6 class="title">About OUR Consulting</h6>
								<p>That started from this tropic port aboard this tiny ship today still want by theam government they survive on up to thetre east side to a deluxe as soldiers of artics fortune.</p>
								<div class="queries"><i class="flaticon-phone-call"></i> Any Queries : <a href="#">(+1) 234 567 900</a></div>
							</div> <!-- /.about-widget -->
							<div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post">
								<h6 class="title">RECENT POSTS</h6>
								<ul>
									<li class="clearfix">
										<img src="{{ asset('assets') }}/front/images/blog/1.jpg" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">Till wanted by theam govern they survive as soldiers.</a>
											<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Feb 06, 2018</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="{{ asset('assets') }}/front/images/blog/2.jpg" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">World don't move to beat of just one drum.</a>
											<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Mar 20, 2018</div>
										</div>
									</li>
								</ul>
							</div> <!-- /.footer-recent-post -->
							<div class="col-xl-2 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">SOLUTIONS</h6>
								<ul>
									<li><a href="#">Travel and Aviation</a></li>
									<li><a href="#">Business Services</a></li>
									<li><a href="#">Consumer Products</a></li>
									<li><a href="#">Financial Services</a></li>
									<li><a href="#">Software Research</a></li>
									<li><a href="#">Quality Resourcing</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
								<h6 class="title">NEWSLETTER</h6>
								<form action="#">
									<input type="text" placeholder="Name *">
									<input type="email" placeholder="Email *">
									<button class="theme-button-one">SUBSCRIBE</button>
								</form>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12"><p>&copy; Copyrights 2018. All Rights Reserved.</p></div>
							<div class="col-md-6 col-12">
								<ul>
									<li><a href="about.html">About</a></li>
									<li><a href="service.html">Solutions</a></li>
									<li><a href="#">FAQ’s</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ asset('assets') }}/front/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="{{ asset('assets') }}/front/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('assets') }}/front/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src="{{ asset('assets') }}/front/vendor/Camera-master/scripts/jquery.mobile.customized.min.js"></script>
	    <script src="{{ asset('assets') }}/front/vendor/Camera-master/scripts/jquery.easing.1.3.js"></script> 
	    <script src="{{ asset('assets') }}/front/vendor/Camera-master/scripts/camera.min.js"></script>
	    <!-- menu  -->
		<script src="{{ asset('assets') }}/front/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="{{ asset('assets') }}/front/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('assets') }}/front/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="{{ asset('assets') }}/front/vendor/jquery.appear.js"></script>
		<script src="{{ asset('assets') }}/front/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="{{ asset('assets') }}/front/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="{{ asset('assets') }}/front/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>