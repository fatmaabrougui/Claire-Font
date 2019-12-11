
            <?PHP

            class config {
                private static $instance = NULL;

                public static function getConnexion() {
                  if (!isset(self::$instance)) {
                    try{
                    self::$instance = new PDO('mysql:host=localhost;dbname=claire_fontaine', 'root', '');
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }catch(Exception $e){
                        die('Erreur: '.$e->getMessage());
                    }
                  }
                  return self::$instance;
                }
              }

              class produitC {
              function afficherproduits(){
                //$sql="SElECT * From produit e inner join formationphp.produit a on e.id_p= a.id_p";
                $sql="SElECT * From produit";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            }
        }




            $produit=new produitC();
            $listeProduits=$produit->afficherProduits();



            ?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:48:07 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Koparion – Book Shop HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->

	<link rel="shortcut icon" type="image/x-icon" href="demo.hasthemes.com/koparion-preview/koparion/img/favicon.png">

	<!-- all css here -->
	<!-- bootstrap v3.3.6 css -->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/bootstrap.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/animate.css">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/meanmenu.min.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/owl.carousel.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/font-awesome.min.css">
	<!-- flexslider.css-->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/flexslider.css">
	<!-- chosen.min.css-->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/chosen.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="demo.hasthemes.com/koparion-preview/koparion/css/responsive.css">
	<!-- modernizr css -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="shop">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="demo.hasthemes.com/koparion-preview/koparion/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->
	<!-- header-area-start -->
	<header>
		<!-- header-top-area-start -->
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="language-area">
							<ul>
								<li><img src="demo.hasthemes.com/koparion-preview/koparion/img/flag/1.jpg" alt="flag" /><a href="demo.hasthemes.com/koparion-preview/koparion/#">English<i class="fa fa-angle-down"></i></a>
									<div class="header-sub">
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/flag/2.jpg" alt="flag" />france</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/flag/3.jpg" alt="flag" />croatia</a></li>
										</ul>
									</div>
								</li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">USD $<i class="fa fa-angle-down"></i></a>
									<div class="header-sub dolor">
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">EUR €</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">USD $</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="account-area text-right">
							<ul>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/my-account.html">My Account</a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/checkout.html">Checkout</a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/login.html">Sign in</a></li>
							</ul>
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
								<a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-search"></i></a>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-4 col-12">
						<div class="logo-area text-center logo-xs-mrg">
							<a href="demo.hasthemes.com/koparion-preview/koparion/index.html"><img src="demo.hasthemes.com/koparion-preview/koparion/img/logo/logo.png" alt="logo" /></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<div class="my-cart">
							<ul>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-shopping-cart"></i>My Cart</a>
									<span>2</span>
									<div class="mini-cart-sub">
										<div class="cart-product">
											<div class="single-cart">
												<div class="cart-img">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/1.jpg" alt="book" /></a>
												</div>
												<div class="cart-info">
													<h5><a href="demo.hasthemes.com/koparion-preview/koparion/#">Joust Duffle Bag</a></h5>
													<p>1 x £60.00</p>
												</div>
												<div class="cart-icon">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-remove"></i></a>
												</div>
											</div>
											<div class="single-cart">
												<div class="cart-img">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/3.jpg" alt="book" /></a>
												</div>
												<div class="cart-info">
													<h5><a href="demo.hasthemes.com/koparion-preview/koparion/#">Chaz Kangeroo Hoodie</a></h5>
													<p>1 x £52.00</p>
												</div>
												<div class="cart-icon">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-remove"></i></a>
												</div>
											</div>
										</div>
										<div class="cart-totals">
											<h5>Total <span>£12.00</span></h5>
										</div>
										<div class="cart-bottom">
											<a class="view-cart" href="demo.hasthemes.com/koparion-preview/koparion/cart.html">view cart</a>
											<a href="demo.hasthemes.com/koparion-preview/koparion/checkout.html">Check out</a>
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
									<li class="active"><a href="demo.hasthemes.com/koparion-preview/koparion/index.html">Home<i class="fa fa-angle-down"></i></a>
										<div class="sub-menu">
											<ul>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/index.html">Home-1</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-2.html">Home-2</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-3.html">Home-3</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-4.html">Home-4</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-5.html">Home-5</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-6.html">Home-6</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-7.html">Home-7</a></li>
											</ul>
										</div>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">Book<i class="fa fa-angle-down"></i></a>
										<div class="mega-menu">
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Jackets</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Tops & Tees</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Graphic T-Shirts</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jackets & Coats</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Fashion Jackets</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">weaters</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Crochet</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Stripes</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sweaters</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">hoodies</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Bottoms</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Heeled sandals</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Flat sandals</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Short Sleeve</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Long Sleeve</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Jeans Pants</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Graphic T-Shirts</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jackets</a>
											</span>
										</div>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">Audio books<i class="fa fa-angle-down"></i></a>
										<div class="mega-menu">
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Shirts</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Tops & Tees</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sweaters </a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jackets & Coats</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Tops & Tees</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Long Sleeve </a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Short Sleeve</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Jackets</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sweaters</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Wedges</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Vests</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Jeans Pants</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Graphic T-Shirts</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a>
											</span>
										</div>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">children’s books<i class="fa fa-angle-down"></i></a>
										<div class="mega-menu mega-menu-2">
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Tops</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Shirts</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Florals</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Crochet</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Stripes</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Bottoms</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Shorts</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Dresses</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Trousers</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jeans</a>
											</span>
											<span>
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" class="title">Shoes</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Heeled sandals</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Flat sandals</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Wedges</a>
												<a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Ankle boots</a>
											</span>
										</div>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">blog<i class="fa fa-angle-down"></i></a>
										<div class="sub-menu sub-menu-2">
											<ul>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog.html">blog</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog-details.html">blog-details</a></li>
											</ul>
										</div>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">pages<i class="fa fa-angle-down"></i></a>
										<div class="sub-menu sub-menu-2">
											<ul>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">shop</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop-list.html">shop list view</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">product-details</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details-affiliate.html">product-affiliate</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog.html">blog</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog-details.html">blog-details</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/contact.html">contact</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/about.html">about</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/login.html">login</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/register.html">register</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/my-account.html">my-account</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/cart.html">cart</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/compare.html">compare</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/checkout.html">checkout</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/wishlist.html">wishlist</a></li>
												<li><a href="demo.hasthemes.com/koparion-preview/koparion/404.html">404 Page</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</div>
						<div class="safe-area">
							<a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">sales off</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    aaaaaaaaaaaaaaaaaaaaaa
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: #2196F3;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  outline: none;
}

.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
}

.btn:hover, .dropdown:hover .btn {
  background-color: #0b7dda;
}
</style>
		<!-- main-menu-area-end -->
		<!-- mobile-menu-area-start -->
		<div class="mobile-menu-area d-lg-none d-block fix">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="mobile-menu">
							<nav id="mobile-menu-active">
								<ul id="nav">
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/index.html">Home</a>
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/index.html">Home-1</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-2.html">Home-2</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-3.html">Home-3</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-4.html">Home-4</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-5.html">Home-5</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-6.html">Home-6</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/index-7.html">Home-7</a></li>
										</ul>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">Book</a>
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Tops & Tees</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Graphic T-Shirts</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jackets & Coats</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Fashion Jackets</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Crochet</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Stripes</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sweaters</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">hoodies</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Heeled sandals</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Flat sandals</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Short Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Long Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Graphic T-Shirts</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jackets</a></li>
										</ul>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">Audio books</a>
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Tops & Tees</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sweaters</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jackets & Coats</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Long Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Short Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sweaters</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Wedges</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Vests</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Polo Short Sleeve</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Sleeveless</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Graphic T-Shirts</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Hoodies</a></li>
										</ul>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">children’s books</a>
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Shirts</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Florals</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Crochet</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Stripes</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Shorts</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Dresses</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Trousers</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Jeans</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Heeled sandals</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Flat sandals</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Wedges</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">Ankle boots</a></li>
										</ul>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">blog</a>
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog.html">Blog</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog-details.html">blog-details</a></li>
										</ul>
									</li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">Page</a>
										<ul>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop.html">shop</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/shop-list.html">shop list view</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html">product-details</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details-affiliate.html">product-affiliate</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog.html">blog</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/blog-details.html">blog-details</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/contact.html">contact</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/about.html">about</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/login.html">login</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/register.html">register</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/my-account.html">my-account</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/cart.html">cart</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/compare.html">compare</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/checkout.html">checkout</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/wishlist.html">wishlist</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/404.html">404 Page</a></li>
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
							<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Home</a></li>
							<li><a href="demo.hasthemes.com/koparion-preview/koparion/#" class="active">shop</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumbs-area-end -->
	<!-- shop-main-area-start -->
	<div class="shop-main-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-12 order-lg-1 order-2 mt-sm-50 mt-xs-40">
					<div class="shop-left">
						<div class="section-title-5 mb-30">
							<h2>Shopping Options</h2>
						</div>
						<div class="left-title mb-20">
							<h4>Category</h4>
						</div>
						<div class="left-menu mb-30">
							<ul>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Jackets<span>(15)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">weaters<span>(9)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Bottoms<span>(12)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Jeans Pants<span>(6)</span></a></li>
							</ul>
						</div>
						<div class="left-title mb-20">
							<h4>Color</h4>
						</div>
						<div class="color-menu mb-30">
							<ul class="color">
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#" class="bg-2"></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#" class="bg-3"></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#" class="bg-4"></a></li>
							</ul>
						</div>
						<div class="left-title mb-20">
							<h4>Manufacturer</h4>
						</div>
						<div class="left-menu mb-30">
							<ul>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Adidas<span>(4)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Chanel<span>(7)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">DKNY <span>(3)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Dolce<span>(3)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Gabbana<span>(2)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Nike<span>(3)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Other <span>(1)</span></a></li>
							</ul>
						</div>
						<div class="left-title mb-20">
							<h4>Price</h4>
						</div>
						<div class="left-menu mb-30">
							<ul>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">$0.00-$9.99<span>(1)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">$30.00-$39.99<span>(11)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">$40.00-$49.99<span>(2)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">$50.00-$59.99<span>(3)</span></a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">$70.00-and above<span>(1)</span></a></li>
							</ul>
						</div>
						<div class="left-title mb-20">
							<h4>Random</h4>
						</div>
						<div class="random-area mb-30">
							<div class="product-active-2 owl-carousel">
								<div class="product-total-2">
									<div class="single-most-product bd mb-18">
										<div class="most-product-img">
											<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/20.jpg" alt="book" /></a>
										</div>
										<div class="most-product-content">
											<div class="product-rating">
												<ul>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Endeavor Daytrip</a></h4>
											<div class="product-price">
												<ul>
													<li>$30.00</li>
													<li class="old-price">$33.00</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="single-most-product bd mb-18">
										<div class="most-product-img">
											<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/21.jpg" alt="book" /></a>
										</div>
										<div class="most-product-content">
											<div class="product-rating">
												<ul>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Savvy Shoulder Tote</a></h4>
											<div class="product-price">
												<ul>
													<li>$30.00</li>
													<li class="old-price">$35.00</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="single-most-product">
										<div class="most-product-img">
											<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/22.jpg" alt="book" /></a>
										</div>
										<div class="most-product-content">
											<div class="product-rating">
												<ul>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Compete Track Tote</a></h4>
											<div class="product-price">
												<ul>
													<li>$35.00</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="product-total-2">
									<div class="single-most-product bd mb-18">
										<div class="most-product-img">
											<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/23.jpg" alt="book" /></a>
										</div>
										<div class="most-product-content">
											<div class="product-rating">
												<ul>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Voyage Yoga Bag</a></h4>
											<div class="product-price">
												<ul>
													<li>$30.00</li>
													<li class="old-price">$33.00</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="single-most-product bd mb-18">
										<div class="most-product-img">
											<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/24.jpg" alt="book" /></a>
										</div>
										<div class="most-product-content">
											<div class="product-rating">
												<ul>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Impulse Duffle</a></h4>
											<div class="product-price">
												<ul>
													<li>$70.00</li>
													<li class="old-price">$74.00</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="single-most-product">
										<div class="most-product-img">
											<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/22.jpg" alt="book" /></a>
										</div>
										<div class="most-product-content">
											<div class="product-rating">
												<ul>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Fusion Backpack</a></h4>
											<div class="product-price">
												<ul>
													<li>$59.00</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="banner-area mb-30">
							<div class="banner-img-2">
								<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/banner/31.jpg" alt="banner" /></a>
							</div>
						</div>
						<div class="left-title-2 mb-30">
							<h2>Compare Products</h2>
							<p>You have no items to compare.</p>
						</div>
						<div class="left-title-2">
							<h2>My Wish List</h2>
							<p>You have no items in your wish list.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">
					<div class="category-image mb-30">
						<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/banner/32.jpg" alt="banner" /></a>
					</div>
					<div class="section-title-5 mb-30">
						<h2>Book</h2>
					</div>
					<div class="toolbar mb-30">
						<div class="shop-tab">
							<div class="tab-3">
								<ul class="nav">
									<li><a class="active" href="demo.hasthemes.com/koparion-preview/koparion/#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
								</ul>
							</div>
							<div class="list-page">
								<p>Items 1-9 of 11</p>
							</div>
						</div>
						<div class="field-limiter">
							<div class="control">
								<span>Show</span>
								<!-- chosen-start -->
								<select data-placeholder="Default Sorting" style="width:50px;" class="chosen-select" tabindex="1">
									<option value="Sorting">1</option>
									<option value="popularity">2</option>
									<option value="rating">3</option>
									<option value="date">4</option>
								</select>
								<!-- chosen-end -->
							</div>
						</div>
						<div class="toolbar-sorter">







                            <span>Sort By Category</span>


                                <select id="sorter" class="sorter-options" data-role="sorter">
                                        <?php
                                        include "../../../core/categorieC.php";
                                        $categorie=new categorieC();
                                        $listeCategorie=$categorie->affichercategories();
                                        foreach($listeCategorie as $row) {
                                            ?>
                                    <option selected="selected" value="<?PHP echo $row['id_categorie']; ?>"> <?PHP echo $row['nom_categorie']; ?> </option>
                                        <?php
                                    }
                                    //$listeProduits=$produit->afficherProduits();
                                    ?>
                                    </select>



                                        <!-- breadcam_area_start -->
                                        <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
                                            <div class="breadcam_inner">
                                                <div class="breadcam_text">
                                                    <h3>Our Books</h3>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- breadcam_area_end -->









							<a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-arrow-up"></i></a>
						</div>
					</div>
					<!-- tab-area-start -->
					<div class="tab-content">
						<div class="tab-pane fade show active" id="th">
							<div class="row">



									<?PHP
									foreach($listeProduits as $row){
										?>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
									<!-- single-product-start -->
									<div class="product-wrapper mb-40">
										<div class="product-img">
											<a href="demo.hasthemes.com/koparion-preview/koparion/#">
												<img src="<?PHP echo '../../uploads/'.$row['image']; ?>" alt="book" class="primary" />
											</a>
											<div class="quick-view">
												<a class="action-view" href="demo.hasthemes.com/koparion-preview/koparion/#" data-target="#productModal" data-toggle="modal" title="Quick View">
													<i class="fa fa-search-plus"></i>
												</a>
											</div>
											<div class="product-flag">
												<ul>
													<li><span class="sale">new</span></li>
													<li><span class="discount-percentage">-5%</span></li>
												</ul>
											</div>
										</div>
										<div class="product-details text-center">
											<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#"><?PHP echo $row['description']; ?></a></h4>
											<div class="product-price">
												<ul>
													<li><?PHP echo $row['prix']; ?> Dt</li>
												</ul>
                        <ul>

                          <td>
                              <form method="GET">
                              <?PHP if($row['stock']==0){ ?>
                          <a class=" btn btn-danger"  href="valableProduit.php?id_produit=<?PHP echo $row['id_produit']; ?>&stock=0">Epuise</a>
                              <?php } else {

                                  ?>
                                  <a class=" btn btn-success" href="valableProduit.php?id_produit=<?PHP echo $row['id_produit']; ?>&stock=1">disponible</a>
                                  <?php  } ?>
                              </form>
                          </td>
  												</ul>
											</div>
										</div>
										<div class="product-link">
											<div class="product-button">
												<a href="demo.hasthemes.com/koparion-preview/koparion/#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											<div class="add-to-link">
												<ul>
													<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- single-product-end -->
								</div>
								<?php
							}?>
							</div>
						</div>
						<div class="tab-pane fade" id="list">
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="demo.hasthemes.com/koparion-preview/koparion/#">
													<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/3.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Crown Summit</a></h4>
												<div class="product-price">
													<ul>
														<li>$36.00</li>
														<li class="old-price">$38.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="demo.hasthemes.com/koparion-preview/koparion/#">
													<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/18.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Driven Backpack</a></h4>
												<div class="product-price">
													<ul>
														<li>$34.00</li>
														<li class="old-price">$36.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="demo.hasthemes.com/koparion-preview/koparion/#">
													<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/10.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Fusion Backpack</a></h4>
												<div class="product-price">
													<ul>
														<li>$59.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop mb-30">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="demo.hasthemes.com/koparion-preview/koparion/#">
													<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/5.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Set of Sprite Yoga Straps</a></h4>
												<div class="product-price">
													<ul>
														<li> <span>Starting at</span>$34.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
							<!-- single-shop-start -->
							<div class="single-shop">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="product-wrapper-2">
											<div class="product-img">
												<a href="demo.hasthemes.com/koparion-preview/koparion/#">
													<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/19.jpg" alt="book" class="primary" />
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="product-wrapper-content">
											<div class="product-details">
												<div class="product-rating">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"><i class="fa fa-star"></i></a></li>
													</ul>
												</div>
												<h4><a href="demo.hasthemes.com/koparion-preview/koparion/#">Compete Track Tote</a></h4>
												<div class="product-price">
													<ul>
														<li>$32.00</li>
													</ul>
												</div>
												<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,... </p>
											</div>
											<div class="product-link">
												<div class="product-button">
													<a href="demo.hasthemes.com/koparion-preview/koparion/#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="add-to-link">
													<ul>
														<li><a href="demo.hasthemes.com/koparion-preview/koparion/product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- single-shop-end -->
						</div>
					</div>
					<!-- tab-area-end -->
					<!-- pagination-area-start -->
					<div class="pagination-area mt-50">
						<div class="list-page-2">
							<p>Items 1-9 of 11</p>
						</div>
						<div class="page-number">
							<ul>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#" class="active">1</a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">2</a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">3</a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">4</a></li>
								<li><a href="demo.hasthemes.com/koparion-preview/koparion/#" class="angle"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- pagination-area-end -->
				</div>
			</div>
		</div>
	</div>
	<!-- shop-main-area-end -->
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
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">home</a></li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Enable Cookies</a></li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Privacy and Cookie Policy</a></li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">contact us</a></li>
									<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">blog</a></li>
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
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/about.html">About us</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Prices drop </a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">New products</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Best sales</a></li>
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
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/contact.html">Contact us</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Sitemap</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Stores</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/register.html">My account </a></li>
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
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/contact.html">Addresses</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Credit slips </a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#"> Orders</a></li>
											<li><a href="demo.hasthemes.com/koparion-preview/koparion/#">Personal info</a></li>
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
							<p>Copyright ©<a href="demo.hasthemes.com/koparion-preview/koparion/#">Koparion</a>. All Right Reserved.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="payment-img text-right">
							<a href="demo.hasthemes.com/koparion-preview/koparion/#"><img src="demo.hasthemes.com/koparion-preview/koparion/img/1.png" alt="payment" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-bottom-end -->
	</footer>
	<!-- footer-area-end -->
	<!-- Modal -->
	<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">
							<div class="modal-tab">
								<div class="product-details-large tab-content">
									<div class="tab-pane active" id="image-1">
										<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-l4.jpg" alt="" />
									</div>
									<div class="tab-pane" id="image-2">
										<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-l2.jpg" alt="" />
									</div>
									<div class="tab-pane" id="image-3">
										<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-l3.jpg" alt="" />
									</div>
									<div class="tab-pane" id="image-4">
										<img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-l5.jpg" alt="" />
									</div>
								</div>
								<div class="product-details-small quickview-active owl-carousel">
									<a class="active" href="demo.hasthemes.com/koparion-preview/koparion/#image-1"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-s4.jpg" alt="" /></a>
									<a href="demo.hasthemes.com/koparion-preview/koparion/#image-2"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-s2.jpg" alt="" /></a>
									<a href="demo.hasthemes.com/koparion-preview/koparion/#image-3"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-s3.jpg" alt="" /></a>
									<a href="demo.hasthemes.com/koparion-preview/koparion/#image-4"><img src="demo.hasthemes.com/koparion-preview/koparion/img/product/quickview-s5.jpg" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-12">
							<div class="modal-pro-content">
								<h3>Chaz Kangeroo Hoodie3</h3>
								<div class="price">
									<span>$70.00</span>
								</div>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>
								<div class="quick-view-select">
									<div class="select-option-part">
										<label>Size*</label>
										<select class="select">
											<option value="">S</option>
											<option value="">M</option>
											<option value="">L</option>
										</select>
									</div>
									<div class="quickview-color-wrap">
										<label>Color*</label>
										<div class="quickview-color">
											<ul>
												<li class="blue">b</li>
												<li class="red">r</li>
												<li class="pink">p</li>
											</ul>
										</div>
									</div>
								</div>
								<form action="#">
									<input type="number" value="1" />
									<button>Add to cart</button>
								</form>
								<span><i class="fa fa-check"></i> In stock</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal end -->






	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/vendor/jquery-1.12.0.min.js"></script>
	<!-- popper js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/bootstrap.min.js"></script>
	<!-- owl.carousel js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/owl.carousel.min.js"></script>
	<!-- meanmenu js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/jquery.meanmenu.js"></script>
	<!-- wow js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/wow.min.js"></script>
	<!-- jquery.parallax-1.1.3.js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/jquery.parallax-1.1.3.js"></script>
	<!-- jquery.countdown.min.js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/jquery.countdown.min.js"></script>
	<!-- jquery.flexslider.js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/jquery.flexslider.js"></script>
	<!-- chosen.jquery.min.js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/chosen.jquery.min.js"></script>
	<!-- jquery.counterup.min.js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/jquery.counterup.min.js"></script>
	<!-- waypoints.min.js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/waypoints.min.js"></script>
	<!-- plugins js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/plugins.js"></script>
	<!-- main js -->
	<script src="demo.hasthemes.com/koparion-preview/koparion/js/main.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:48:08 GMT -->
</html>
