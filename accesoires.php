

<?PHP
include "../core/produitC.php";
include "../core/etoileC.php";

$etoileC=new etoileC();
$produit1C=new produitC();
$listeProduits=$produit1C->afficherProduits();
session_start ();  
 include "../entities/carte.php";
include "../core/carteC.php";
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/coupon.php";
include "../core/couponC.php";
include "../core/transC.php";
include "../core/categorieC.php";
include "../core/commentaireC.php";


$panierC=new panierC();
$listepanier=$panierC->afficherprod();

$tot=0;
 $extot=0;
$listeProduits1=$produit1C->afficherProduits1();

$categorie1C=new categorieC();
$listeCategories=$categorie1C->afficherCategories();
include "../core/eventC.php";
$event1C=new eventC();
$listeevents=$event1C->afficherevents();
//var_dump($listeEmployes->fetchAll());
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM produit WHERE CONCAT(nom, refe) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SElECT * From produit p inner join categorie c  ON  p.refe= c.refe AND c.affichage='oui' AND p.categorie='accesoires'  ";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "web");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.devitems.com/ee/ee-v1/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:50:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS
    ============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/font.css">

    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-10 mb-10">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        <a href="checkout.php"><img src="assets/images/icons/car.png" alt="Car Icon"> <span>Track your order</span></a>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    <div class="header-advance-search">

                        <form method="GET" action="recherche_galerie.php">
                            <div class="input"><input type="text" placeholder="Chercher event" name="search"></div>
                            
                            <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>

                    </div><!-- Header Advance Search End -->
                </div>
<div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                   
                      <!--  <a href="compte.html"><i class="icofont icofont-user-alt-7"></i> <span></span></a>-->
                      <!--  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span></a>-->
                    <!-- Header Account Links End -->
                                <?php
                    
                     
                     

  $clientC=new clientC();
  $carteC=new carteC();
    $result=$clientC->recherchercd($_SESSION['username']);
    $result1=$carteC->recherchercr($_SESSION['username']);
    
    



if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{  ?>
   <div class="header-account-links">
   <a href="edit.php"><i class= "icofont icofont-user-alt-7" aria-hidden="true"></i><?php echo $_SESSION['username']; ?><span> </span></a>

</div> 
<?php
foreach ($result1 as $row ) {
    # code...

if($row['confirme']==0 ) {?>
<div class="header-account-links">
 <a href="editt.php"><i class="far fa-id-card"></i> <span>Not-confirmed</span></a>
 </div>
<?php } ?>
<?php if($row['confirme']==1) {?>
<div class="header-account-links">
 <a href="pdf_eventt.php"><i class="far fa-id-card"></i> <span>Confirmed</span></a>
 </div>
<?php } }?>
<?php 
foreach ($result as $row ) {
    # code...

if($row['cf']==0) {?>
<div class="header-account-links">
 <a href="crt.php"><i class="icofont icofont-user-alt-7"></i> <span>get cart</span></a>
 </div>
<?php } }?>


  <!-- <a class="btn btn-lg btn-primary m-b-5 m-t-5" href="modifier.php"> <?php echo $_SESSION['username']; ?> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
  <!-- <a id="heading" href="carte.php"><i class="far fa-address-card" aria-hidden="true"></i> <span>carte</span></a>
   &nbsp;&nbsp;&nbsp;&nbsp;-->
   <div class="header-account-links">
   <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span></a>

</div>
  <!-- <a id="heading" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span></a> -->
    <?php 

}

else {  ?>
    <a  href="login.html" class="fa fa-sign-in" >Login</a>

    
    
      <?php


}  ?>

                </div>

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-15 mb-15">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a href="index.php">
                          <img  src="assets/images/log.gif" alt="Ariana Scooters">

                      <!--      <img class="theme-dark" src="assets/images/log.png" alt="Ariana Scooters"> -->
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                    <!-- Main Menu Start -->

                    <div class="main-menu">
                        <nav>
                            <ul>

                                <li class="active"><a href="index.php">HOME</a>
                                   
                                </li>
                                <li class="menu-item-has-children"><a href="shop.php">Shop</a>
                                    <ul class="sub-menu">
                                        <li class=""><a href="scooter.php">Scooter</a>
                                     
                                        </li>
                                        <li class=""><a href="velo.php">Velo</a>
                                        </li>
                                        <li class=""><a href="accesories.php">Accessoires</a>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">EVENEMENTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="afficher_event.php">A venir</a>
                                            <ul>
                                                <li><a href="galerie.php">Galerie</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active" ><a href="blog-3-column.html">SAV</a>
                                    <ul class="sub-menu">
                                        <li><a href="retour.php">Politique du retour</a></li>
                                        <li><a href="ajouterFormulaire.php">Ajouter Réclamation</a></li>
                                        <li class="active"><a href="afficherFormulaire.php">Afficher vos Réclamations</a></li>
                                        <li><a href="afficherSuivie.php">Afficher les Suivies</a></li>
                                        <li><a href="ajouterAvis.php">Vos Avis</a></li>
                                    </ul>
                                </li>
                                <li><a href="aboutus.html">ABOUT US</a></li>
                            </ul>
                        </nav>
                    </div><!-- Main Menu End -->
                </div>

                 <div class="col order-2 order-lg-12 order-xl-12">
                    <!-- Header Shop Links Start -->
                    <div class="header-shop-links">

                        <!-- Compare -->
                        <!-- Wishlist -->
                        <a href="wishlist.php" class="header-wishlist"><i class="ti-heart"></i> </a>
                        <!-- Cart -->
                        <a href="cart.php" class="header-cart"><i class="ti-shopping-cart"></i>
                          <span class="number"><?php echo $foxtrot;?></span>

                        </a>

                    </div><!-- Header Shop Links End -->
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Bottom End -->

    <!-- Header Category Start -->
  
</div><!-- Header Section End -->

<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">    
      
        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>
        
    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <?php 

                                                    foreach( $listepanier as $row )
                                                        { 
        
                                                            ?>
        <li>
            <a class="image"><img src="<?php echo $row['img']; ?>" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title"><?php echo $row['nomprod']; ?></a>
                <span class="price"> <?php echo $row['prix']; ?> </span>
                <span class="qty"><?php echo $row['quantite']; ?></span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <?php
                                                            $tot+=$row['total'];
                                                          }
                                            ?>
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">    
    
        <h4 class="sub-total">Total: <span><?php echo $tot."DT"; ?></span></h4>

        <div class="button">
            <a href="checkout.php">CHECK OUT</a>
        </div>
         <div class="button">
            <a href="cart.php">CART</a>
        </div>
        
    </div>     

</div><!-- Mini Cart Wrap End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>SHOP Grid VIEW</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SHOP Grid VIEW</a></li>
                    </ul>
                </div>
            </div>
        </div>

       
    </div>
</div><!-- Page Banner Section End -->

<!-- Feature Product Section Start -->
<div class="product-section section mt-90 mb-40">
    <div class="container">
        <div class="row">
           
            <div class="col-xl-9 col-lg-8 col-12 order-lg-2 mb-50">
                
                <div class="row mb-50">
                    <div class="col">
                       
                        <!-- Shop Top Bar Start -->
                        <div class="shop-top-bar with-sidebar">

                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                            </div>

                            <!-- Product Showing -->
                           
                            <!-- Product Short -->
                            <div class="product-short">
                                <p>Short by</p>
                                <select name="sortby" class="nice-select"  onChange="location.href=''+this.options[this.selectedIndex].value+'.php';">
                                    
                                    <option value="ratinga">Best rated</option>
                                    <option value="triasca">Price: low to high</option>
                                    <option value="tridesca">Price: high to low</option>
                                </select>
                            </div>

                            <!-- Product Pages -->
                            <div class="product-pages">
                                <p>Pages 1 of 25</p>
                            </div>

                        </div><!-- Shop Top Bar End -->
                        
                    </div>
                </div>
                
                <!-- Shop Product Wrap Start -->
                <!-- Shop Product Wrap Start -->
                <div class="shop-product-wrap grid with-sidebar row">
                    <?php while($row = mysqli_fetch_array($search_result)): ?>
                    <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                       
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="product-detail.php?id=<?php echo $row['refe'] ?>" class="img"><img src="<?PHP echo $row['img'];?>" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat"><?PHP echo $row['nom']; ?></a>
                                    <h5 class="title"><a href="single-product.html"><?PHP echo $row['refe']; ?></a></h5>

                                </div>

                                <!-- Price & Ratting -->
                              
                                   <div class="price-ratting">

                                    <h5 class="price"><?PHP echo $row['prix'].",000 DT"; ?></h5>

                                    <div class="ratting">
                                            <?php 
                                            $total=0;
                                            $counte=1;

                                            $listet=$etoileC->recupererrating($row['refe']);
                                            if (empty($listet))
                                                {$rating=0;}
                                            else {
                                            foreach ($listet as $key) {
                                                $total=$key['nbetoile']+$total;
                                                $counte=$counte+1;
                                            }
                                            $rating=$total/$counte;}
                                            ?>
                                        <p><?PHP echo $rating; ?>/5</p>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                        
                        <!-- Product List Start -->
                        <div class="ee-product-list">

                            <!-- Image -->
                            <div class="image">

                                <a href="product-detail.php?id=<?php echo $row['refe'] ?>" class="img"><img src="<?PHP echo $row['img'];?>" alt="Product Image"></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="head-content">

                                    <div class="category-title">
                                        <a href="#" class="cat"><?PHP echo $row['refe']; ?></a>
                                        <h5 class="title"><a href="single-product.html"><?PHP echo $row['nom']; ?></a></h5>
                                    </div>
                                    
                                    <h5 class="price"><?PHP echo $row['prix'].",000 DT"; ?></h5>

                                </div>
                                
                                <div class="left-content">
                                   
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    
                                    <div class="desc">
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                                    </div>
                                    
                                    <div class="actions">

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="right-content">
                                    <div class="specification">
                                        <h5>Specifications</h5>
                                        <ul>
                                            <li>Intel Core i7 Processor</li>
                                            <li>Zeon Z 170 Pro Motherboad</li>
                                            <li>16 GB RAM</li>
                                        </ul>
                                    </div>
                                    <span class="availability">Availability: <span>In Stock</span></span>
                                </div>

                            </div>

                        </div><!-- Product List End -->          
                    </div>
<?php endwhile;
                                ?>
                    

                
                    
                </div><!-- Shop Product Wrap End -->
                
                <div class="row mt-30">
                    <div class="col">

                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i>Back</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li ><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li> - - - - - </li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">20</a></li>
                            <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
                
            </div>
            
            <div class="shop-sidebar-wrap col-xl-3 col-lg-4 col-12 order-lg-1 mb-15">
                
                <div class="shop-sidebar mb-35">
                   
                    <h4 class="title">CATEGORIES</h4>
                    
                    <ul class="sidebar-category">
                        <li><a href="#">2 Roues</a>
                            <ul class="children">
                                <li><a href="scooter.php">Scooter</a></li>
                                <li><a href="velo.php">Velo</a></li>
                            </ul>
                        </li>
                        <li><a href="accesoires.php">Accessoires</a></li>
                    <li><a href="pieces.php">Piéces de rechange </a></li>
                    </ul>
                    
                </div>
                
               
                
                <div class="shop-sidebar mb-35">

                   
                    <h4 class="title">Price</h4>
                    <form name="f" action="shop.php" method="post">
                    <div class="sidebar-price">

                     <p>prix min</p><input type="number" name="min" onblur="verifmin(this);"><br><br>
                        <p>prix max</p> <input type="number" name="max" onblur="verifmax(this);">
                    </div>
                    
                      <div class="col-12 mb-30"><input type="submit" name="rechercher" value="rechercher" ></div>
                    </form>
                </div>
                
                <div class="shop-sidebar mb-35">
                   
                    <div class="banner"><a href="#"><img src="assets/images/banner/banne.jpg" alt="Banner"></a></div>
                    
                </div>
                
               
                <div class="shop-sidebar mb-35">
                   
                    <h4 class="title">Couleur</h4>
                    
                    <ul class="sidebar-brand">
                        <li><a href="couleurBA.php">Bleu</a></li>
                        <li><a href="couleurBLA.php">Blanc</a></li>
                        <li><a href="couleurRA.php">Rouge</a></li>
                        <li><a href="couleurNA.php">Noire</a></li>
                        <li><a href="couleurORA.php">Orange</a></li>
                        

                    </ul>
                    
                </div>
                
                <div class="shop-sidebar mb-35">
                   
                   <h4 class="title">Marques</h4>
                    
                    <div class="sidebar-tags">
                        <a href="peugeot.php">Peugeot</a>
                        <a href="ipon.php">Ipon</a>
                        <a href="nolan.php">Nolan</a>
                        <a href="mbk.php">MBK</a>
                        <a href="inconnue.php">Inconnue</a>
                       
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div><!-- Feature Product Section End -->

<!-- Brands Section Start -->
<div class="brands-section section mb-90">
    <div class="container">
        <div class="row">
            
            <!-- Brand Slider Start -->
            <div class="brand-slider col">
                <div class="brand-item col"><img src="assets/images/brands/brand-1.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-2.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-3.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-4.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-5.png" alt="Brands"></div>
            </div><!-- Brand Slider End -->
            
        </div>
    </div>
</div><!-- Brands Section End -->

<!-- Footer Section Start -->
<div class="footer-section section bg-ivory">
   
    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-90 pb-50">
        <div class="container">
            
            <div class="row">
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">CONTACT INFO</h4>
                        
                        <p class="contact-info">
                            <span>Address</span>
                            La soukra <br>                  </p>
                        
                        <p class="contact-info">
                            <span>Phone</span>
                            <a href="tel:01234567890">54878305</a>
                        </p>
                        
                        <p class="contact-info">
                            <span>Web</span>
                            <a href="mailto:info@example.com">arianascooters@gmail.com</a>
                        </p>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
                
                
            </div>
            
        </div>
    </div><!-- Footer Bottom Section Start -->
   
    
</div><!-- Footer Section End -->


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script src="assets/js/login.js"></script>


</body>


<!-- Mirrored from demo.devitems.com/ee/ee-v1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:48:36 GMT -->
</html>