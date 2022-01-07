	@extends('layouts.front');
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-3 col-sm-4 header-most-top">
					<p class=" text-lg-left text-center">Welcome to our shop!</p>
				</div>
				<div class="col-lg-9 col-sm-8 header-right ml-auto text-sm-right text-center">
					<!-- header lists -->
					<ul class="top-header-lists">
						
						<li class="mx-3">
							<a href="#login" data-toggle="modal" data-target="#exampleModal" class="">
								<i class="fas fa-sign-in-alt mr-1"></i> Log In </a>
						</li>
						
						<li>
							<a href="#register" data-toggle="modal" data-target="#exampleModal2" class="">
								<i class="fas fa-sign-out-alt mr-1"></i>Register </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>


	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name="Name" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="Password"
								required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
						<p class="text-center dont-do mt-3">(Or)</p>
						<div class="social text-center mt-2">
							<ul class="list-unstyled">
								<li class="d-inline">
									<a class="icon fb" href="#facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="d-inline mx-1">
									<a class="icon tw" href="#twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="d-inline">
									<a class="icon gp" href="#google-plus">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name" name="Name" required="">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" name="Email" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="Password"
								id="password1" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password"
								name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms
									& Conditions</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">(Or)</p>
						<div class="social text-center mt-2">
							<ul class="list-unstyled">
								<li class="d-inline">
									<a class="icon fb" href="#facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="d-inline mx-1">
									<a class="icon tw" href="#twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="d-inline">
									<a class="icon gp" href="#google-plus">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot my-md-4 my-3" id="site-header">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
				<!-- logo -->
				<div class="col-lg-3 col-md-4 logo_agile">
					<h1>
						<a href="index.html"><span>E</span>lectronics <span>M</span>art</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-lg-9 col-md-8 header">
					<div class="row">
						<!-- search -->
						<div class="col-lg-9 col-sm-8 agileits_search">
							<form class="form-inline" action="#" method="post" style="max-width:600px;">
								<input class="form-control" type="search"
									placeholder="Search for products, brands and more" aria-label="Search" required>
								<button class="btn" type="submit"><i class="fas fa-search"
										aria-hidden="true"></i></button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div
							class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
							<div class="cart-store">
								<!-- toggle switch for light and dark theme -->
								<div class="cont-ser-position">
									<nav class="navigation">
										<div class="theme-switch-wrapper">
											<label class="theme-switch" for="checkbox">
												<input type="checkbox" id="checkbox">
												<div class="mode-container">
													<i class="gg-sun"></i>
													<i class="gg-moon"></i>
												</div>
											</label>
										</div>
									</nav>
								</div>
								<!-- //toggle switch for light and dark theme -->
							</div>
							<div class="cart-store">
								<a href="checkout.html"><i class="far fa-heart"></i></a>
							</div>
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last text-right">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart p-0" type="submit" name="submit" value="">
										<img src="images/cart.png" alt="" class="img-fluid"> Cart
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Electronics
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Mobiles, Computers</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product.html">All Mobile Phones</a>
												</li>
												<li>
													<a href="product.html">All Mobile Accessories</a>
												</li>
												<li>
													<a href="product.html">Cases & Covers</a>
												</li>
												<li>
													<a href="product.html">Screen Protectors</a>
												</li>
												<li>
													<a href="product.html">Power Banks</a>
												</li>
												<li>
													<a href="product.html">All Certified Refurbished</a>
												</li>
												<li>
													<a href="product.html">Tablets</a>
												</li>
												<li>
													<a href="product.html">Wearable Devices</a>
												</li>
												<li>
													<a href="product.html">Smart Home</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product.html">Laptops</a>
												</li>
												<li>
													<a href="product.html">Drives & Storage</a>
												</li>
												<li>
													<a href="product.html">Printers & Ink</a>
												</li>
												<li>
													<a href="product.html">Networking Devices</a>
												</li>
												<li>
													<a href="product.html">Computer Accessories</a>
												</li>
												<li>
													<a href="product.html">Game Zone</a>
												</li>
												<li>
													<a href="product.html">Software</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Appliances
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">TV, Appliances, Electronics</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Televisions</a>
												</li>
												<li>
													<a href="product2.html">Home Entertainment Systems</a>
												</li>
												<li>
													<a href="product2.html">Headphones</a>
												</li>
												<li>
													<a href="product2.html">Speakers</a>
												</li>
												<li>
													<a href="product2.html">MP3, Media Players & Accessories</a>
												</li>
												<li>
													<a href="product2.html">Audio & Video Accessories</a>
												</li>
												<li>
													<a href="product2.html">Cameras</a>
												</li>
												<li>
													<a href="product2.html">DSLR Cameras</a>
												</li>
												<li>
													<a href="product2.html">Camera Accessories</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Musical Instruments</a>
												</li>
												<li>
													<a href="product2.html">Gaming Consoles</a>
												</li>
												<li>
													<a href="product2.html">All Electronics</a>
												</li>
												<li>
													<a href="product2.html">Air Conditioners</a>
												</li>
												<li>
													<a href="product2.html">Refrigerators</a>
												</li>
												<li>
													<a href="product2.html">Washing Machines</a>
												</li>
												<li>
													<a href="product2.html">Kitchen & Home Appliances</a>
												</li>
												<li>
													<a href="product2.html">Heating & Cooling Appliances</a>
												</li>
												<li>
													<a href="product2.html">All Appliances</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">About Us</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product.html">New Arrivals</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="blog.html">Blog Posts</a>
								<a class="dropdown-item" href="blog-single.html">Blog Single</a>
								<a class="dropdown-item" href="product.html">Product 1</a>
								<a class="dropdown-item" href="product2.html">Product 2</a>
								<a class="dropdown-item" href="single.html">Single Product 1</a>
								<a class="dropdown-item" href="single2.html">Single Product 2</a>
								<a class="dropdown-item" href="checkout.html">Checkout Page</a>
								<a class="dropdown-item" href="payment.html">Payment Page</a>
								<a class="dropdown-item" href="terms.html">Terms of use</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->