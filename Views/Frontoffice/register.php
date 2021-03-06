<?php require './fb-init.php'; ?>
<?php           class config {
                private static $instance = NULL;

                public static function getConnexion() {
                  if (!isset(self::$instance)) {
                    try{
                    self::$instance = new PDO('mysql:host=localhost;dbname=clairefontaine', 'root', '');
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
        class categorieC {




        	function affichercategories(){
        		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id_cat= a.id_cat";
        		$sql="SElECT * From categorie";
        		$db = config::getConnexion();
        		try{
        		$liste=$db->query($sql);
        		return $liste;
        		}
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
        	}}



            $produit=new produitC();
            $listeProduits=$produit->afficherProduits();



            ?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:48:17 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Koparion – Book Shop HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
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

<body class="register">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
								<li><a href="my-account.php">My Account</a></li>
								<li><a href="checkout.php">Checkout</a></li>
								<li><a href="login.php">Sign in</a></li>
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
							<li><a href="#" class="active">register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumbs-area-end -->
	<!-- user-login-area-start -->
	<div class="user-login-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login-title text-center mb-30">
						<h2>S'inscrire</h2>
						<p>Avoir un compte chez nous vous permets de beaucoup de promotions et plein de surprises !</p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-8 col-md-12 col-12">
					<div class="billing-fields">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="single-register">
									<form action="#">
										<label>Nom<span>*</span></label>
										<input type="text"name="nom_client" />
									</form>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="single-register">
									<form method="POST" action="ajoutclient.php" onsubmit="">
										<label>Prénom<span>*</span></label>
										<input type="text" name="prenom_client" />
									</form>
								</div>
							</div>
						</div>
							<div class="single-register">
								<form method="POST" action="ajoutclient.php" onsubmit="">
									<label>Adresse Mail<span>*</span></label>
									<input type="mail" name="email_client" />
								</form>
							</div>
							<div class="single-register">
								<form method="POST" action="ajoutclient.php" onsubmit="">
									<label>Numéro de téléphone<span>*</span></label>
									<input type="number" name="tel_client" />
								</form>
							</div>
						<div class="single-register">
							<form method="POST" action="ajoutclient.php" onsubmit="">
									<label>Catégorie préféré<span>*</span></label>
                                <select id="sorter" class="sorter-options" data-role="sorter">
                                        <?php
                                    //    include "../../core/categorieC.php";
                                        $categorie=new categorieC();
                                        $listeCategorie=$categorie->affichercategories();
                                        foreach($listeCategorie as $row) {
                                            ?><p> aloo </p>
                                    <option selected="selected" value="<?PHP echo $row['id_categorie']; ?>"> <?PHP echo $row['nom_categorie']; ?> </option>
                                        <?php
                                    }
                                    //$listeProduits=$produit->afficherProduits();
                                    ?>
                                    </select>
							</form>
						</div>
						<div class="single-register">
							<form method="POST" action="ajoutclient.php" onsubmit="">
								<label>Mot de passe<span>*</span></label>
								<input type="password" placeholder="Password" name="pwd_client" />
							</form>
						</div>
						<div class="single-register">
							<form method="POST" action="ajoutclient.php" onsubmit="">
								<label>Resaisie de mot de passe<span>*</span></label>
								<input type="password" placeholder="Password" name="pwd_client2" />
							</form>
						</div>
						<div class="single-register single-register-3">
							<input id="rememberme" type="checkbox" name="rememberme" value="forever">
							<label class="inline">I agree <a href="#">Terms & Condition</a></label>
						</div>
						<div class="single-register">
							<input type="submit" name="ajouter" value="S'inscrire">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- user-login-area-end -->
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


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:48:17 GMT -->
</html>