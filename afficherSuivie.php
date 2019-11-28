<?PHP
include "../core/suivieC.php";
include "../entities/suivie.php";
session_start (); 
$suivie1C=new suivieC();
$listmail=$suivie1C->recupmail($_SESSION['username']);
foreach ($listmail as $row) {
    $listeSuivies=$suivie1C->afficherSui($row['adresse']);
}
//$listeSuivies=$suivie1C->recherche($_POST['valueToSearch']);

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


//var_dump($listeEmployes->fetchAll());
?>




<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM suivie WHERE CONCAT(id, cin, exam, remb) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM suivie";
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
                   
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    
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
                        
                    </div><!-- Logo End -->
                </div>

                <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                    <!-- Main Menu Start -->

                    <div class="main-menu">
                        <nav>
                            <ul>

                                
                                
                                
                                <li class="menu-item-has-children active" ><a href="blog-3-column.html">SAV</a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="ajouterFormulaire.php">Ajouter Réclamation</a></li>
                                        <li><a href="afficherFormulaire.php">Afficher vos Réclamations</a></li>
                                        <li class="active"><a href="afficherSuivie.php">Afficher les Suivies</a></li>
                                      
                                    </ul>
                                </li>
                             
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
                <h1>LES SUIVIES</h1>


                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">SAV</a></li>
                        <li><a href="#">SUIVIE</a></li>
                    </ul>
                </div>
                
                
            </div>
        </div>

        

    </div>
</div><!-- Page Banner Section End -->


<!----------------------------------------------------------------------------------------------------------------------------------------->
<!--=====================================================================================================================================-->


<!-- Compare Page Start -->
<div class="page-section section mt-90 mb-90">
    <div class="container">
        <div class="row"> 
            <div class="col-12">
                <form  method="POST" action="ajouterFormulaire2.php">       
                        
                    <!-- Compare Table -->
                    <div class="compare-table table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <th class="text-center">ID </th>
                                    <th class="text-center">CIN </th>
                                    <th class="text-center">Type d'Examen</th>
                                    <th class="text-center">Type de Remboursement</th>
                                    <th class="text-center">Date de retour</th>
                                    
                                    
                                </tr>

                                <?PHP
                                 foreach ($listeSuivies as $row ) {
                                 //while($row = mysqli_fetch_array($search_result)):
                                 ?>
                                <tr>
                                    <td class="pt-3-half"><?PHP echo $row['id']; ?></td>
                                    <td class="pt-3-half"><?PHP echo $row['cin']; ?></td>
                                    <td class="pt-3-half"><?PHP echo $row['exam']; ?></td>
                                    <td class="pt-3-half"><?PHP echo $row['remb']; ?></td>
                                    <td class="pt-3-half"><?PHP echo $row['dat']; ?>
                                         <?PHP
                                            //endwhile;
                                            }
                                      ?>
                                    </td>
                                
                                
                            </tbody>
                        </table>

                        


                    </div>
                    
                </form>


                
            </div>
        </div></br></br></br>
 <!--       <form action="afficherSuivie.php" method="post">
            
            
                                    
                                            <div class="col-12 mb-20">
                                               <input class="form-control btl-2 bbl-2" type="text" name="valueToSearch" placeholder="Value To Search">
                                            </div>
                                            

                                            <div class="input-group-append">
                                                
    &nbsp;&nbsp;&nbsp;&nbsp;                  <input type="submit" name="search" value="Rechercher" class="btn btn-primary btr-2 bbr-2">
                                                <br><br>
                                            </div>
    </div>
</div> -->
<!-- Compare Page End --> 




<!----------------------------------------------------------------------------------------------------------------------------------------->
<!--=====================================================================================================================================-->


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
                           Menzah 6 <br>                  </p>
                        
                        <p class="contact-info">
                            <span>Phone</span>
                            <a href="tel:01234567890">52519441</a>
                        </p>
                        
                        <p class="contact-info">
                            <span>Web</span>
                            <a href="mailto:info@example.com">ClaireLafontaine@gmail.com</a>
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