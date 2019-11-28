<?PHP
include "../core/formulaireC.php";
$formulaire1C=new formulaireC();
$listeFormulaires=$formulaire1C->afficherFormulaires();
session_start (); 
include "../entities/carte.php";
include "../core/carteC.php";
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/produit.php";
include "../core/produitC.php";
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
$produit1C=new produitC();
$listeProduits1=$produit1C->afficherProduits1();

$categorie1C=new categorieC();
$listeCategories=$categorie1C->afficherCategories();
include "../core/eventC.php";
$event1C=new eventC();
$listeevents=$event1C->afficherevents();
?>




<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ArianaScooters</title>
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
                                        <li class=""><a href="accesoires.php">Accessoires</a>
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

<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>VOS AVIS</h1>


                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">SAV</a></li>
                        <li><a href="#">AVIS</a></li>
                    </ul>
                </div>
                
                
            </div>
        </div>

        

    </div>
</div>



<?php
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=web;charset=utf8','root','');
        if(isset($_POST['submit_commentaire'])) {

 if( isset ($_SESSION['username']) ){

      if(isset($_POST['avis'])  AND !empty($_POST['avis'])) {
        
           $avis = htmlspecialchars($_POST['avis']);
        
        
            $ins = $bdd->prepare('INSERT INTO  avis (avis,user) VALUES (?,?)');
            $ins->execute(array($_POST['avis'],$_SESSION['username']));
            $c_msg = "<span style='color:green'>Votre avis a bien été posté</span>";
            echo "<META http-equiv='refresh' content='0;URL=ajouterAvis.php'>";
            
         } 
       else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }
}
else
                echo "<script >alert('Vous devez vous connectez')</script>";

  }
   //$commentaires = $bdd->prepare('SELECT * FROM commentaires ORDER BY id DESC');
        $avis=$formulaire1C->afficherComf();


   
   ?>





<!-- Typography Section Start -->
<div class="typography-section section mt-90 mb-30">
    <div class="container">

        
           <div class="col-12 mb-60">
            <?php if(isset($c_msg)) { echo $c_msg; } ?>
                    <br /><br />
                    <?php
                    foreach($avis as $row){?>
                <blockquote class="blockquote blockquote-3">
                    
                    
                    <h2> <?php echo $row['user']; ?> </h2>
                    <p>“<?php echo $row['avis'];?>” </p> <br />
                    
                </blockquote>
                <?php } ?>
           </div>

        
        <form method="POST" class="comment-form">
                    <div class="row">
                                
                                
                                
                                <div class="col-12 mb-30">
                                    <label for="message">Message</label>    
                                    <textarea id="message"  name="avis"></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <input type="submit"  name="submit_commentaire">
                                </div>
                                
                    </div>

                    
        </form>


       </div>
        
    </div>
</div><!-- Typography Section End -->


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

</body>


<!-- Mirrored from demo.devitems.com/ee/ee-v1/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:51:25 GMT -->
</html>