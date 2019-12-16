<!DOCTYPE html>
<html lang="<?php echo @$site['lang'] ?>">
<head>
	<?php $this->load->view('meta') ?>
</head>
<body>
	<header class="main_menu home_menu">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<?php $this->load->view('logo') ?>

						<div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url()?>templates/aranoz/index.html">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="<?php echo base_url()?>templates/aranoz/blog.html" id="navbarDropdown_1"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Shop
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/category.html"> shop category</a>
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/single-product.html">product details</a>
										
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="<?php echo base_url()?>templates/aranoz/blog.html" id="navbarDropdown_3"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										pages
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/login.html"> login</a>
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/tracking.html">tracking</a>
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/checkout.html">product checkout</a>
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/cart.html">shopping cart</a>
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/confirmation.html">confirmation</a>
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/elements.html">elements</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="<?php echo base_url()?>templates/aranoz/blog.html" id="navbarDropdown_2"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										blog
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/blog.html"> blog</a>
										<a class="dropdown-item" href="<?php echo base_url()?>templates/aranoz/single-blog.html">Single blog</a>
									</div>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url()?>templates/aranoz/contact.html">Contact</a>
								</li>
							</ul>
						</div>
						<div class="hearer_icon d-flex">
							<a id="search_1" href="<?php echo base_url()?>templates/aranoz/javascript:void(0)"><i class="ti-search"></i></a>
							<a href="<?php echo base_url()?>templates/aranoz/"><i class="ti-heart"></i></a>
							<div class="dropdown cart">
								<a class="dropdown-toggle" href="<?php echo base_url()?>templates/aranoz/#" id="navbarDropdown3" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-cart-plus"></i>
								</a>
								<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<div class="single_product">
	
									</div>
								</div> -->
								
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container ">
				<form class="d-flex justify-content-between search-inner">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="ti-close" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- Header part end-->

	<!-- banner part start-->
	<section class="banner_part">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="banner_slider owl-carousel">
						<div class="single_banner_slider">
							<div class="row">
								<div class="col-lg-5 col-md-8">
									<div class="banner_text">
										<div class="banner_text_iner">
											<h1>Wood & Cloth
												Sofa</h1>
											<p>Incididunt ut labore et dolore magna aliqua quis ipsum
												suspendisse ultrices gravida. Risus commodo viverra</p>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="btn_2">buy now</a>
										</div>
									</div>
								</div>
								<div class="banner_img d-none d-lg-block">
									<img src="<?php echo base_url()?>templates/aranoz/img/banner_img.png" alt="">
								</div>
							</div>
						</div><div class="single_banner_slider">
							<div class="row">
								<div class="col-lg-5 col-md-8">
									<div class="banner_text">
										<div class="banner_text_iner">
											<h1>Cloth & Wood
												Sofa</h1>
											<p>Incididunt ut labore et dolore magna aliqua quis ipsum
												suspendisse ultrices gravida. Risus commodo viverra</p>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="btn_2">buy now</a>
										</div>
									</div>
								</div>
								<div class="banner_img d-none d-lg-block">
									<img src="<?php echo base_url()?>templates/aranoz/img/banner_img.png" alt="">
								</div>
							</div>
						</div><div class="single_banner_slider">
							<div class="row">
								<div class="col-lg-5 col-md-8">
									<div class="banner_text">
										<div class="banner_text_iner">
											<h1>Wood & Cloth
												Sofa</h1>
											<p>Incididunt ut labore et dolore magna aliqua quis ipsum
												suspendisse ultrices gravida. Risus commodo viverra</p>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="btn_2">buy now</a>
										</div>
									</div>
								</div>
								<div class="banner_img d-none d-lg-block">
									<img src="<?php echo base_url()?>templates/aranoz/img/banner_img.png" alt="">
								</div>
							</div>
						</div>
						<!-- <div class="single_banner_slider">
							<div class="row">
								<div class="col-lg-5 col-md-8">
									<div class="banner_text">
										<div class="banner_text_iner">
											<h1>Cloth $ Wood Sofa</h1>
											<p>Incididunt ut labore et dolore magna aliqua quis ipsum
												suspendisse ultrices gravida. Risus commodo viverra</p>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="btn_2">buy now</a>
										</div>
									</div>
								</div>
								<div class="banner_img d-none d-lg-block">
									<img src="<?php echo base_url()?>templates/aranoz/img/banner_img.png" alt="">
								</div>
							</div>
						</div> -->
					</div>
					<div class="slider-counter"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner part start-->

	<!-- feature_part start-->
	<section class="feature_part padding_top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section_tittle text-center">
						<h2>Featured Category</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-7 col-sm-6">
					<div class="single_feature_post_text">
						<p>Premium Quality</p>
						<h3>Latest foam Sofa</h3>
						<a href="<?php echo base_url()?>templates/aranoz/#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
						<img src="<?php echo base_url()?>templates/aranoz/img/feature/feature_1.png" alt="">
					</div>
				</div>
				<div class="col-lg-5 col-sm-6">
					<div class="single_feature_post_text">
						<p>Premium Quality</p>
						<h3>Latest foam Sofa</h3>
						<a href="<?php echo base_url()?>templates/aranoz/#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
						<img src="<?php echo base_url()?>templates/aranoz/img/feature/feature_2.png" alt="">
					</div>
				</div>
				<div class="col-lg-5 col-sm-6">
					<div class="single_feature_post_text">
						<p>Premium Quality</p>
						<h3>Latest foam Sofa</h3>
						<a href="<?php echo base_url()?>templates/aranoz/#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
						<img src="<?php echo base_url()?>templates/aranoz/img/feature/feature_3.png" alt="">
					</div>
				</div>
				<div class="col-lg-7 col-sm-6">
					<div class="single_feature_post_text">
						<p>Premium Quality</p>
						<h3>Latest foam Sofa</h3>
						<a href="<?php echo base_url()?>templates/aranoz/#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
						<img src="<?php echo base_url()?>templates/aranoz/img/feature/feature_4.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- upcoming_event part start-->

	<!-- product_list start-->
	<section class="product_list section_padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="section_tittle text-center">
						<h2>awesome <span>shop</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="product_list_slider owl-carousel">
						<div class="single_product_list_slider">
							<div class="row align-items-center justify-content-between">
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_1.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_2.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_3.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_4.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_5.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_6.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_7.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_8.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="single_product_list_slider">
							<div class="row align-items-center justify-content-between">
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_1.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_2.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_3.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_4.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_5.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_6.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_7.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="single_product_item">
										<img src="<?php echo base_url()?>templates/aranoz/img/product/product_8.png" alt="">
										<div class="single_product_text">
											<h4>Quartz Belt Watch</h4>
											<h3>$150.00</h3>
											<a href="<?php echo base_url()?>templates/aranoz/#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product_list part start-->

	<!-- awesome_shop start-->
	<section class="our_offer section_padding">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 col-md-6">
					<div class="offer_img">
						<img src="<?php echo base_url()?>templates/aranoz/img/offer_img.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="offer_text">
						<h2>Weekly Sale on
							60% Off All Products</h2>
						<div class="date_countdown">
							<div id="timer">
								<div id="days" class="date"></div>
								<div id="hours" class="date"></div>
								<div id="minutes" class="date"></div>
								<div id="seconds" class="date"></div>
							</div>
						</div>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="enter email address"
								aria-label="Recipient's username" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<a href="<?php echo base_url()?>templates/aranoz/#" class="input-group-text btn_2" id="basic-addon2">book now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- awesome_shop part start-->

	<!-- product_list part start-->
	<section class="product_list best_seller section_padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="section_tittle text-center">
						<h2>Best Sellers <span>shop</span></h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-12">
					<div class="best_product_slider owl-carousel">
						<div class="single_product_item">
							<img src="<?php echo base_url()?>templates/aranoz/img/product/product_1.png" alt="">
							<div class="single_product_text">
								<h4>Quartz Belt Watch</h4>
								<h3>$150.00</h3>
							</div>
						</div>
						<div class="single_product_item">
							<img src="<?php echo base_url()?>templates/aranoz/img/product/product_2.png" alt="">
							<div class="single_product_text">
								<h4>Quartz Belt Watch</h4>
								<h3>$150.00</h3>
							</div>
						</div>
						<div class="single_product_item">
							<img src="<?php echo base_url()?>templates/aranoz/img/product/product_3.png" alt="">
							<div class="single_product_text">
								<h4>Quartz Belt Watch</h4>
								<h3>$150.00</h3>
							</div>
						</div>
						<div class="single_product_item">
							<img src="<?php echo base_url()?>templates/aranoz/img/product/product_4.png" alt="">
							<div class="single_product_text">
								<h4>Quartz Belt Watch</h4>
								<h3>$150.00</h3>
							</div>
						</div>
						<div class="single_product_item">
							<img src="<?php echo base_url()?>templates/aranoz/img/product/product_5.png" alt="">
							<div class="single_product_text">
								<h4>Quartz Belt Watch</h4>
								<h3>$150.00</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product_list part end-->

	<!-- subscribe_area part start-->
	<section class="subscribe_area section_padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="subscribe_area_text text-center">
						<h5>Join Our Newsletter</h5>
						<h2>Subscribe to get Updated
							with new offers</h2>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="enter email address"
								aria-label="Recipient's username" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<a href="<?php echo base_url()?>templates/aranoz/#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--::subscribe_area part end::-->

	<!-- subscribe_area part start-->
	<section class="client_logo padding_top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_1.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_2.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_3.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_4.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_5.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_3.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_1.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_2.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_3.png" alt="">
					</div>
					<div class="single_client_logo">
						<img src="<?php echo base_url()?>templates/aranoz/img/client_logo/client_logo_4.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--::subscribe_area part end::-->

	<!--::footer_part start::-->
	<footer class="footer_part">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-sm-6 col-lg-2">
					<div class="single_footer_part">
						<h4>Top Products</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url()?>templates/aranoz/">Managed Website</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Manage Reputation</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Power Tools</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-2">
					<div class="single_footer_part">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url()?>templates/aranoz/">Jobs</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Brand Assets</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Investor Relations</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-2">
					<div class="single_footer_part">
						<h4>Features</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url()?>templates/aranoz/">Jobs</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Brand Assets</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Investor Relations</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-2">
					<div class="single_footer_part">
						<h4>Resources</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url()?>templates/aranoz/">Guides</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Research</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Experts</a></li>
							<li><a href="<?php echo base_url()?>templates/aranoz/">Agencies</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="single_footer_part">
						<h4>Newsletter</h4>
						<p>Heaven fruitful doesn't over lesser in days. Appear creeping
						</p>
						<div id="mc_embed_signup">
							<form target="_blank"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="subscribe_form relative mail_part">
								<input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
									class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
									onblur="this.placeholder = ' Email Address '">
								<button type="submit" name="submit" id="newsletter-submit"
									class="email_icon newsletter-submit button-contactForm">subscribe</button>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="copyright_part">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="copyright_text">
							<P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="<?php echo base_url()?>templates/aranoz/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="footer_icon social_icon">
							<ul class="list-unstyled">
								<li><a href="<?php echo base_url()?>templates/aranoz/#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="<?php echo base_url()?>templates/aranoz/#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
								<li><a href="<?php echo base_url()?>templates/aranoz/#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
								<li><a href="<?php echo base_url()?>templates/aranoz/#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--::footer_part end::-->

	<!-- jquery plugins here-->
	<script src="<?php echo base_url()?>templates/aranoz/js/jquery-1.12.1.min.js"></script>
	<!-- popper js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/bootstrap.min.js"></script>
	<!-- easing js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/jquery.magnific-popup.js"></script>
	<!-- swiper js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/swiper.min.js"></script>
	<!-- swiper js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/masonry.pkgd.js"></script>
	<!-- particles js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/jquery.nice-select.min.js"></script>
	<!-- slick js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/slick.min.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/waypoints.min.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/contact.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/jquery.form.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url()?>templates/aranoz/js/mail-script.js"></script>
	<!-- custom js -->
	<script src="<?php echo base_url()?>templates/aranoz/js/custom.js"></script>
</body>

</html>