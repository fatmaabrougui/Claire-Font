<!doctype html>
<?php require './fb-init.php'; ?>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:48:17 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Koparion – Book Shop HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

	<!-- all css here -->
	<!-- bootstrap v3.3.6 css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- flexslider.css-->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- chosen.min.css-->
	<link rel="stylesheet" href="css/chosen.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- modernizr css -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="wishlist">
	<!-- header-area-start -->
	<header>
		<!-- header-top-area-start -->
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="language-area">
							<ul>
								<li><img src="img/flag/1.jpg" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
									<div class="header-sub">
										<ul>
											<li><a href="#"><img src="img/flag/2.jpg" alt="flag" />france</a></li>
											<li><a href="#"><img src="img/flag/3.jpg" alt="flag" />croatia</a></li>
										</ul>
									</div>
								</li>
								<li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
									<div class="header-sub dolor">
										<ul>
											<li><a href="#">EUR €</a></li>
											<li><a href="#">USD $</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="account-area text-right">
							<ul>
								
 <?php if (isset($_SESSION['access_token'])): ?><li><a href="my-account.php">My Account</a></li>
								<li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                    <?php else: ?>
                                    <li><a href="login.php">Sign in</a></li>
                                    <?php endif; ?>							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header-top-area-end -->
		<!-- header-mid-area-start -->
		<div class="header-mid-area ptb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-5 col-12">
						<div class="header-search">
							<form action="#">
								<input type="text" placeholder="Search entire store here..." />
								<a href="#"><i class="fa fa-search"></i></a>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-4 col-12">
						<div class="logo-area text-center logo-xs-mrg">
							<a href="index.php"><img src="img/logo/logo.png" alt="logo" /></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<div class="my-cart">
							<ul>
								<li><a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a>
									<span>2</span>
									<div class="mini-cart-sub">
										<div class="cart-product">
											<div class="single-cart">
												<div class="cart-img">
													<a href="#"><img src="img/product/1.jpg" alt="book" /></a>
												</div>
												<div class="cart-info">
													<h5><a href="#">Joust Duffle Bag</a></h5>
													<p>1 x £60.00</p>
												</div>
												<div class="cart-icon">
													<a href="#"><i class="fa fa-remove"></i></a>
												</div>
											</div>
											<div class="single-cart">
												<div class="cart-img">
													<a href="#"><img src="img/product/3.jpg" alt="book" /></a>
												</div>
												<div class="cart-info">
													<h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
													<p>1 x £52.00</p>
												</div>
												<div class="cart-icon">
													<a href="#"><i class="fa fa-remove"></i></a>
												</div>
											</div>
										</div>
										<div class="cart-totals">
											<h5>Total <span>£12.00</span></h5>
										</div>
										<div class="cart-bottom">
											<a class="view-cart" href="cart.php">view cart</a>
											<a href="checkout.php">Check out</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header-mid-area-end -->
		<!-- main-menu-area-start -->
		<div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="menu-area">
							<nav>
								<ul>
									<li class="active"><a href="index.php">Home<i class="fa fa-angle-down"></i></a>
										<div class="sub-menu">
											<ul>
												<li><a href="index.php">Home-1</a></li>
												<li><a href="index-2.php">Home-2</a></li>
												<li><a href="index-3.php">Home-3</a></li>
												<li><a href="index-4.php">Home-4</a></li>
												<li><a href="index-5.php">Home-5</a></li>
												<li><a href="index-6.php">Home-6</a></li>
												<li><a href="index-7.php">Home-7</a></li>
											</ul>
										</div>
									</li>
									<li><a href="product-details.php">Book<i class="fa fa-angle-down"></i></a>
										<div class="mega-menu">
											<span>
												<a href="#" class="title">Jackets</a>
												<a href="shop.php">Tops & Tees</a>
												<a href="shop.php">Polo Short Sleeve</a>
												<a href="shop.php">Graphic T-Shirts</a>
												<a href="shop.php">Jackets & Coats</a>
												<a href="shop.php">Fashion Jackets</a>
											</span>
											<span>
												<a href="#" class="title">weaters</a>
												<a href="shop.php">Crochet</a>
												<a href="shop.php">Sleeveless</a>
												<a href="shop.php">Stripes</a>
												<a href="shop.php">Sweaters</a>
												<a href="shop.php">hoodies</a>
											</span>
											<span>
												<a href="#" class="title">Bottoms</a>
												<a href="shop.php">Heeled sandals</a>
												<a href="shop.php">Polo Short Sleeve</a>
												<a href="shop.php">Flat sandals</a>
												<a href="shop.php">Short Sleeve</a>
												<a href="shop.php">Long Sleeve</a>
											</span>
											<span>
												<a href="#" class="title">Jeans Pants</a>
												<a href="shop.php">Polo Short Sleeve</a>
												<a href="shop.php">Sleeveless</a>
												<a href="shop.php">Graphic T-Shirts</a>
												<a href="shop.php">Hoodies</a>
												<a href="shop.php">Jackets</a>
											</span>
										</div>
									</li>
									<li><a href="product-details.php">Audio books<i class="fa fa-angle-down"></i></a>
										<div class="mega-menu">
											<span>
												<a href="#" class="title">Shirts</a>
												<a href="shop.php">Tops & Tees</a>
												<a href="shop.php">Sweaters </a>
												<a href="shop.php">Hoodies</a>
												<a href="shop.php">Jackets & Coats</a>
											</span>
											<span>
												<a href="#" class="title">Tops & Tees</a>
												<a href="shop.php">Long Sleeve </a>
												<a href="shop.php">Short Sleeve</a>
												<a href="shop.php">Polo Short Sleeve</a>
												<a href="shop.php">Sleeveless</a>
											</span>
											<span>
												<a href="#" class="title">Jackets</a>
												<a href="shop.php">Sweaters</a>
												<a href="shop.php">Hoodies</a>
												<a href="shop.php">Wedges</a>
												<a href="shop.php">Vests</a>
											</span>
											<span>
												<a href="#" class="title">Jeans Pants</a>
												<a href="shop.php">Polo Short Sleeve</a>
												<a href="shop.php">Sleeveless</a>
												<a href="shop.php">Graphic T-Shirts</a>
												<a href="shop.php">Hoodies</a>
											</span>
										</div>
									</li>
									<li><a href="product-details.php">children’s books<i class="fa fa-angle-down"></i></a>
										<div class="mega-menu mega-menu-2">
											<span>
												<a href="#" class="title">Tops</a>
												<a href="shop.php">Shirts</a>
												<a href="shop.php">Florals</a>
												<a href="shop.php">Crochet</a>
												<a href="shop.php">Stripes</a>
											</span>
											<span>
												<a href="#" class="title">Bottoms</a>
												<a href="shop.php">Shorts</a>
												<a href="shop.php">Dresses</a>
												<a href="shop.php">Trousers</a>
												<a href="shop.php">Jeans</a>
											</span>
											<span>
												<a href="#" class="title">Shoes</a>
												<a href="shop.php">Heeled sandals</a>
												<a href="shop.php">Flat sandals</a>
												<a href="shop.php">Wedges</a>
												<a href="shop.php">Ankle boots</a>
											</span>
										</div>
									</li>
									<li><a href="#">blog<i class="fa fa-angle-down"></i></a>
										<div class="sub-menu sub-menu-2">
											<ul>
												<li><a href="blog.php">blog</a></li>
												<li><a href="blog-details.php">blog-details</a></li>
											</ul>
										</div>
									</li>
									<li><a href="#">pages<i class="fa fa-angle-down"></i></a>
										<div class="sub-menu sub-menu-2">
											<ul>
												<li><a href="shop.php">shop</a></li>
												<li><a href="shop-list.php">shop list view</a></li>
												<li><a href="product-details.php">product-details</a></li>
												<li><a href="product-details-affiliate.php">product-affiliate</a></li>
												<li><a href="blog.php">blog</a></li>
												<li><a href="blog-details.php">blog-details</a></li>
												<li><a href="contact.php">contact</a></li>
												<li><a href="about.php">about</a></li>
												<li><a href="login.php">login</a></li>
												<li><a href="register.php">register</a></li>
												<li><a href="my-account.php">my-account</a></li>
												<li><a href="cart.php">cart</a></li>
												<li><a href="compare.php">compare</a></li>
												<li><a href="checkout.php">checkout</a></li>
												<li><a href="wishlist.php">wishlist</a></li>
												<li><a href="404.php">404 Page</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</div>
						<div class="safe-area">
							<a href="product-details.php">sales off</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main-menu-area-end -->
		<!-- mobile-menu-area-start -->
		<div class="mobile-menu-area d-lg-none d-block fix">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="mobile-menu">
							<nav id="mobile-menu-active">
								<ul id="nav">
									<li><a href="index.php">Home</a>
										<ul>
											<li><a href="index.php">Home-1</a></li>
											<li><a href="index-2.php">Home-2</a></li>
											<li><a href="index-3.php">Home-3</a></li>
											<li><a href="index-4.php">Home-4</a></li>
											<li><a href="index-5.php">Home-5</a></li>
											<li><a href="index-6.php">Home-6</a></li>
											<li><a href="index-7.php">Home-7</a></li>
										</ul>
									</li>
									<li><a href="product-details.php">Book</a>
										<ul>
											<li><a href="shop.php">Tops & Tees</a></li>
											<li><a href="shop.php">Polo Short Sleeve</a></li>
											<li><a href="shop.php">Graphic T-Shirts</a></li>
											<li><a href="shop.php">Jackets & Coats</a></li>
											<li><a href="shop.php">Fashion Jackets</a></li>
											<li><a href="shop.php">Crochet</a></li>
											<li><a href="shop.php">Sleeveless</a></li>
											<li><a href="shop.php">Stripes</a></li>
											<li><a href="shop.php">Sweaters</a></li>
											<li><a href="shop.php">hoodies</a></li>
											<li><a href="shop.php">Heeled sandals</a></li>
											<li><a href="shop.php">Polo Short Sleeve</a></li>
											<li><a href="shop.php">Flat sandals</a></li>
											<li><a href="shop.php">Short Sleeve</a></li>
											<li><a href="shop.php">Long Sleeve</a></li>
											<li><a href="shop.php">Polo Short Sleeve</a></li>
											<li><a href="shop.php">Sleeveless</a></li>
											<li><a href="shop.php">Graphic T-Shirts</a></li>
											<li><a href="shop.php">Hoodies</a></li>
											<li><a href="shop.php">Jackets</a></li>
										</ul>
									</li>
									<li><a href="product-details.php">Audio books</a>
										<ul>
											<li><a href="shop.php">Tops & Tees</a></li>
											<li><a href="shop.php">Sweaters</a></li>
											<li><a href="shop.php">Hoodies</a></li>
											<li><a href="shop.php">Jackets & Coats</a></li>
											<li><a href="shop.php">Long Sleeve</a></li>
											<li><a href="shop.php">Short Sleeve</a></li>
											<li><a href="shop.php">Polo Short Sleeve</a></li>
											<li><a href="shop.php">Sleeveless</a></li>
											<li><a href="shop.php">Sweaters</a></li>
											<li><a href="shop.php">Hoodies</a></li>
											<li><a href="shop.php">Wedges</a></li>
											<li><a href="shop.php">Vests</a></li>
											<li><a href="shop.php">Polo Short Sleeve</a></li>
											<li><a href="shop.php">Sleeveless</a></li>
											<li><a href="shop.php">Graphic T-Shirts</a></li>
											<li><a href="shop.php">Hoodies</a></li>
										</ul>
									</li>
									<li><a href="product-details.php">children’s books</a>
										<ul>
											<li><a href="shop.php">Shirts</a></li>
											<li><a href="shop.php">Florals</a></li>
											<li><a href="shop.php">Crochet</a></li>
											<li><a href="shop.php">Stripes</a></li>
											<li><a href="shop.php">Shorts</a></li>
											<li><a href="shop.php">Dresses</a></li>
											<li><a href="shop.php">Trousers</a></li>
											<li><a href="shop.php">Jeans</a></li>
											<li><a href="shop.php">Heeled sandals</a></li>
											<li><a href="shop.php">Flat sandals</a></li>
											<li><a href="shop.php">Wedges</a></li>
											<li><a href="shop.php">Ankle boots</a></li>
										</ul>
									</li>
									<li><a href="#">blog</a>
										<ul>
											<li><a href="blog.php">Blog</a></li>
											<li><a href="blog-details.php">blog-details</a></li>
										</ul>
									</li>
									<li><a href="product-details.php">Page</a>
										<ul>
											<li><a href="shop.php">shop</a></li>
											<li><a href="shop-list.php">shop list view</a></li>
											<li><a href="product-details.php">product-details</a></li>
											<li><a href="product-details-affiliate.php">product-affiliate</a></li>
											<li><a href="blog.php">blog</a></li>
											<li><a href="blog-details.php">blog-details</a></li>
											<li><a href="contact.php">contact</a></li>
											<li><a href="about.php">about</a></li>
											<li><a href="login.php">login</a></li>
											<li><a href="register.php">register</a></li>
											<li><a href="my-account.php">my-account</a></li>
											<li><a href="cart.php">cart</a></li>
											<li><a href="compare.php">compare</a></li>
											<li><a href="checkout.php">checkout</a></li>
											<li><a href="wishlist.php">wishlist</a></li>
											<li><a href="404.php">404 Page</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mobile-menu-area-end -->
	</header>
	<!-- header-area-end -->
	<!-- breadcrumbs-area-start -->
	<div class="breadcrumbs-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumbs-menu">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#" class="active">wishlist</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumbs-area-end -->
	<!-- entry-header-area-start -->
	<div class="entry-header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="entry-header-title">
						<h2>Wishlist</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- entry-header-area-end -->
	<!-- cart-main-area-start -->
	<div class="cart-main-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="wishlist-content">
						<form action="#">
							<div class="wishlist-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-remove">
												<span class="nobr">Remove</span>
											</th>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product Name</th>
											<th class="product-price">Unit Price </th>
											<th class="product-stock-stauts">Stock Status </th>
											<th class="product-subtotal">Add To Cart </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="product-remove"><a href="#">×</a></td>
											<td class="product-thumbnail"><a href="#"><img src="img/cart/1.jpg" alt="man" /></a></td>
											<td class="product-name"><a href="#">Vestibulum suscipit</a></td>
											<td class="product-price"><span class="amount">£165.00</span></td>
											<td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
											<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
										</tr>
										<tr>
											<td class="product-remove"><a href="#">×</a></td>
											<td class="product-thumbnail"><a href="#"><img src="img/cart/2.jpg" alt="man" /></a></td>
											<td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
											<td class="product-price"><span class="amount">£50.00</span></td>
											<td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
											<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="6">
												<div class="wishlist-share">
													<h4 class="wishlist-share-title">Share on:</h4>
													<ul>
														<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
														<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a class="pinterest" href="#"><i class="fa fa-dribbble"></i></a></li>
														<li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
														<li><a class="email" href="#"><i class="fa fa-instagram"></i></a></li>
													</ul>
												</div>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cart-main-area-end -->
	<!-- footer-area-start -->
	<footer>
		<!-- footer-top-start -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer-top-menu bb-2">
							<nav>
								<ul>
									<li><a href="#">home</a></li>
									<li><a href="#">Enable Cookies</a></li>
									<li><a href="#">Privacy and Cookie Policy</a></li>
									<li><a href="#">contact us</a></li>
									<li><a href="#">blog</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-top-start -->
		<!-- footer-mid-start -->
		<div class="footer-mid ptb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<div class="single-footer br-2 xs-mb">
									<div class="footer-title mb-20">
										<h3>Products</h3>
									</div>
									<div class="footer-mid-menu">
										<ul>
											<li><a href="about.php">About us</a></li>
											<li><a href="#">Prices drop </a></li>
											<li><a href="#">New products</a></li>
											<li><a href="#">Best sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<div class="single-footer br-2 xs-mb">
									<div class="footer-title mb-20">
										<h3>Our company</h3>
									</div>
									<div class="footer-mid-menu">
										<ul>
											<li><a href="contact.php">Contact us</a></li>
											<li><a href="#">Sitemap</a></li>
											<li><a href="#">Stores</a></li>
											<li><a href="register.php">My account </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<div class="single-footer br-2 xs-mb">
									<div class="footer-title mb-20">
										<h3>Your account</h3>
									</div>
									<div class="footer-mid-menu">
										<ul>
											<li><a href="contact.php">Addresses</a></li>
											<li><a href="#">Credit slips </a></li>
											<li><a href="#"> Orders</a></li>
											<li><a href="#">Personal info</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="single-footer mrg-sm">
							<div class="footer-title mb-20">
								<h3>STORE INFORMATION</h3>
							</div>
							<div class="footer-contact">
								<p class="adress">
									<span>My Company</span>
									42 avenue des Champs Elysées 75000 Paris France
								</p>
								<p><span>Call us now:</span> (+1)866-540-3229</p>
								<p><span>Email:</span> support@hastech.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-mid-end -->
		<!-- footer-bottom-start -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row bt-2">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="copy-right-area">
							<p>Copyright ©<a href="#">Koparion</a>. All Right Reserved.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="payment-img text-right">
							<a href="#"><img src="img/1.png" alt="payment" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-bottom-end -->
	</footer>
	<!-- footer-area-end -->


	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="js/vendor/jquery-1.12.0.min.js"></script>
	<!-- popper js -->
	<script src="js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- owl.carousel js -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- meanmenu js -->
	<script src="js/jquery.meanmenu.js"></script>
	<!-- wow js -->
	<script src="js/wow.min.js"></script>
	<!-- jquery.parallax-1.1.3.js -->
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<!-- jquery.countdown.min.js -->
	<script src="js/jquery.countdown.min.js"></script>
	<!-- jquery.flexslider.js -->
	<script src="js/jquery.flexslider.js"></script>
	<!-- chosen.jquery.min.js -->
	<script src="js/chosen.jquery.min.js"></script>
	<!-- jquery.counterup.min.js -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- waypoints.min.js -->
	<script src="js/waypoints.min.js"></script>
	<!-- plugins js -->
	<script src="js/plugins.js"></script>
	<!-- main js -->
	<script src="js/main.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:48:17 GMT -->
</html>