<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('meta') ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="alert alert-light" role="alert">
			  <span class="primary">hari ini</span>: <?php echo date('D, d-M-Y') ?>
			</div>
		</div>
		<div class="row mb-3">
			<?php $this->load->view('logo') ?>
		</div>
		<div class="row">
			<div class="col-md-6">
				<span class="badge badge-danger">Hot</span> <span class="alert-light">Terima Kasih Telah Berkunjung di Website Kami</span>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="support float-right">
							<i class="fa fa-flag"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<div class="widget">
					<div class="widget-header">
						<h5>Kategori Produk</h5>
					</div>
					<div class="widget-body mt-3">
						<ul class="list-group list-group-flush">
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						  <a href="" class="widget-item">
						  	<li class="list-group-item">
						  		<span class="float-left"><i class="fa fa-plus fa-xs"></i> Computer</span>
						  		<span class="float-right"><i class="fa fa-desktop"></i></span>
						  	</li>
						  </a>
						</ul>
					</div>
				</div>
				<div class="widget">
					<div class="widget-header">
						<h5>Login Pelanggan</h5>
					</div>
					<div class="widget-body mt-3">
						<form action="">
							<div class="form-group">
								<label for="">username</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="">password</label>
								<input type="password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-sm btn-success">Login</button>
								<input type="reset" class="btn btn-sm btn-warning">
							</div>
						</form>
						<div class="widget-item">
							<i class="fa fa-caret-right"></i> <a href="" class="primary">Lupa Password ?</a>
						</div>
						<div class="widget-item">
							<i class="fa fa-caret-right"></i> <a href="" class="primary">Lupa Username ?</a>
						</div>
						<div class="widget-item">
							<i class="fa fa-caret-right"></i> Belum Terdaftar ? <a href="" class="primary">Registrasi</a>
						</div>
					</div>
				</div>
				<div class="widget">
					<div class="widget-header">
						<h5>Metode Pembayaran</h5>
					</div>
					<div class="widget-body">
						<div class="widget-item">
							<img src="<?php echo $link_template;?>/assets/images/payment.png" class="img img-fluid" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div id="slider">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="<?php echo $link_template;?>/assets/images/electronics1.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="<?php echo $link_template;?>/assets/images/electronics2.jpg" class="d-block w-100" alt="...">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				<div class="products">
					<div class="product">
						<div class="row">
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col col-xs-3 p-0 m-0">
								<div class="card card-default widget p-1">
									<div class="card-header p-1">
										<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
										<span class="product_title">Samsung TV 32 INC</span>
									</div>
									<div class="card-body">
										<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
										<span style="font-size: 14px;">Rp,-1.500.000</span>
									</div>
									<div class="card-footer buy">
										<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
				</div>
				<div class="product_run">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <div class="row">
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
								</div>
					    </div>
					    <div class="carousel-item">
					      <div class="row">
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
								</div>
					    </div>
					    <div class="carousel-item">
					      <div class="row">
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
									<div class="col col-xs-3 p-0 m-0">
										<a href="#" title="Samsung TV"><img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt=""></a>
									</div>
								</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col col-xs-3 p-0 m-0">
						<div class="card card-default widget p-1">
							<div class="widget-header">
								<h4>Produk Terbaru</h4>										
							</div>
							<div class="widget-body">
								<div class="card-header p-1">
									<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
									<span class="product_title">Samsung TV 32 INC</span>
								</div>
								<div class="card-body">
									<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
									<span style="font-size: 14px;">Rp,-1.500.000</span>
								</div>
								<div class="card-footer buy">
									<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-xs-3 p-0 m-0">
						<div class="card card-default widget p-1">
							<div class="widget-header">
								<h4>Produk Terbaru</h4>										
							</div>
							<div class="widget-body">
								<div class="card-header p-1">
									<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
									<span class="product_title">Samsung TV 32 INC</span>
								</div>
								<div class="card-body">
									<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
									<span style="font-size: 14px;">Rp,-1.500.000</span>
								</div>
								<div class="card-footer buy">
									<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-xs-3 p-0 m-0">
						<div class="card card-default widget p-1">
							<div class="widget-header">
								<h4>Produk Terbaik</h4>										
							</div>
							<div class="widget-body">
								<div class="card-header p-1">
									<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
									<span class="product_title">Samsung TV 32 INC</span>
								</div>
								<div class="card-body">
									<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
									<span style="font-size: 14px;">Rp,-1.500.000</span>
								</div>
								<div class="card-footer buy">
									<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-xs-3 p-0 m-0">
						<div class="card card-default widget p-1">
							<div class="widget-header">
								<h4>Produk Terpopuler</h4>										
							</div>
							<div class="widget-body">
								<div class="card-header p-1">
									<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
									<span class="product_title">Samsung TV 32 INC</span>
								</div>
								<div class="card-body">
									<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
									<span style="font-size: 14px;">Rp,-1.500.000</span>
								</div>
								<div class="card-footer buy">
									<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-xs-3 p-0 m-0">
						<div class="card card-default widget p-1">
							<div class="widget-header">
								<h4>Produk Spesial</h4>										
							</div>
							<div class="widget-body">
								<div class="card-header p-1">
									<span class="badge badge-success">LED TV</span><div class="clearfix"></div>
									<span class="product_title">Samsung TV 32 INC</span>
								</div>
								<div class="card-body">
									<img src="<?php echo $link_template;?>/assets/images/samsung-tv.png" class="img img-fluid" alt="">
									<span style="font-size: 14px;">Rp,-1.500.000</span>
								</div>
								<div class="card-footer buy">
									<a href="" class="btn btn-warning btn-sm">Beli Di Sini <i class="fa fa-cart-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="row">
				<div class="col">
					<ul>
						<h5>About Us</h5>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat velit, aut, sed et animi nobis voluptatum id? Asperiores nobis fugiat labore dolorem, atque hic perspiciatis aut nisi aliquam. Assumenda, id.</li>
					</ul>
				</div>
				<div class="col">
					<ul>
						<h5>Contact Us</h5>
						<li><i class="fa fa-home"></i> Jl Tulakan Km 01</li>
						<li><a href=""><i class="fa fa-phone"></i> 085290335332</a></li>
						<li><a href=""><i class="fa fa-envelope"></i> iwansafr@gmail.com</a></li>
					</ul>
				</div>
				<div class="col">
					<ul>
						<h5>Kerja Sama</h5>
						<li><a href="">Dispermades</a></li>
						<li><a href="">Kominfo</a></li>
					</ul>
				</div>
				<div class="col">
					<ul>
						<h5>Social Media</h5>
						<a href="" class="btn btn-secondary btn-sm"><i class="fa fa-whatsapp"></i></a> | <a href="" class="btn btn-secondary btn-sm"><i class="fa fa-twitter"></i></a> | <a href="" class="btn btn-secondary btn-sm"><i class="fa fa-instagram"></i></a>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row pl-5">
				<p>© Copyright 2020 All Right Reserved.  <a href="">Mandesa.co.id</a></p>
			</div>
		</footer>
	</div>
	<?php $this->load->view('js') ?>
</body>
</html>