<?php
session_start();
if (empty($_SESSION['username']) || (empty($_SESSION['Id'])))
{
    header("location:login.php");

}

include "../../core/categorieC.php";
include "../../entities/Categorie.php";
if (isset($_POST['modifier'])){
    $categorieC=new categorieC();
    $cat=new Categorie($_POST['id_categorie'],$_POST['description_cat']);
    $categorieC->modifiercategorie($cat,$_POST['id_c_ini']);

    header('Location: afficherCategorie.php');

}
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                    </div>
                    <h4 class="name">john doe</h4>
                    <a href="#">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="fas fa-chart-bar"></i>Inbox</a>
                            <span class="inbox-num">3</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>eCommerce</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Features
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-table"></i>Tables</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="far fa-check-square"></i>Forms</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">
                                        <i class="fas fa-sign-in-alt"></i>Login</a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fas fa-user"></i>Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">
                                        <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">
                                        <i class="fab fa-flickr"></i>Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">
                                        <i class="fas fa-comment-alt"></i>Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">
                                        <i class="far fa-window-maximize"></i>Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">
                                        <i class="far fa-id-card"></i>Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">
                                        <i class="far fa-bell"></i>Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">
                                        <i class="fas fa-tasks"></i>Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">
                                        <i class="far fa-window-restore"></i>Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">
                                        <i class="fas fa-toggle-on"></i>Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">
                                        <i class="fas fa-th-large"></i>Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">
                                        <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                </li>
                                <li>
                                    <a href="typo.html">
                                        <i class="fas fa-font"></i>Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
<?PHP


if (isset($_GET['id_categorie'])){
$categorieC=new categorieC();
$result=$categorieC->recuperercategorie($_GET['id_categorie']);
$categorie=$result[0];


?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 m-auto grid-margin">
                <div class="card">
                    <div class="row">
                        <div class="col-10 ml-lg-4 ">
                            <form class="forms-sample" method="post">
                                <div class="form-group">

                                    <label for="exampleInputName1">ID categorie</label>
                                    <input type="text" required name="id_categorie" value="<?PHP echo $categorie['id_categorie'];?>"  class="form-control" id="id_categorie" placeholder="Name">
                                    <input type="text" required hidden name="id_c_ini" value="<?PHP echo $categorie['id_categorie'];?>"  class="form-control" id="id_categorie" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea1">description</label>
                                    <textarea required class="form-control" name="description_cat" id="description" rows="4"><?PHP echo $categorie['nom_categorie'];?></textarea>
                                </div>







                                <button type="submit" name="modifier" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                                <form>


                                <section>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="copyright">
                                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- END PAGE CONTAINER-->
                                </div>

                                </div>

                                <!-- Jquery JS-->
                                <script src="vendor/jquery-3.2.1.min.js"></script>
                                <!-- Bootstrap JS-->
                                <script src="vendor/bootstrap-4.1/popper.min.js"></script>
                                <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
                                <!-- Vendor JS       -->
                                <script src="vendor/slick/slick.min.js">
                                </script>
                                <script src="vendor/wow/wow.min.js"></script>
                                <script src="vendor/animsition/animsition.min.js"></script>
                                <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                                </script>
                                <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
                                <script src="vendor/counter-up/jquery.counterup.min.js">
                                </script>
                                <script src="vendor/circle-progress/circle-progress.min.js"></script>
                                <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                                <script src="vendor/chartjs/Chart.bundle.min.js"></script>
                                <script src="vendor/select2/select2.min.js">
                                </script>
                                <script src="vendor/vector-map/jquery.vmap.js"></script>
                                <script src="vendor/vector-map/jquery.vmap.min.js"></script>
                                <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
                                <script src="vendor/vector-map/jquery.vmap.world.js"></script>

                                <!-- Main JS-->
                                <script src="js/main.js"></script>

                                </body>

                                </html>
                                <!-- end document-->
                                }
