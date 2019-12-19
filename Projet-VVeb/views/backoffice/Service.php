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
    <title>Dashboard</title>

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include "header.php" ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>

                                <th>ID RECLAMATION</th>
                                <th>ID_COMMANDE</th>
                                <th>EMAIL CLIENT</th>
                                <th>CONTENU</th>
                                <th>IMAGE</th>
                                <th>ETAT</th>
                                <th>TRAITER</th>
                                <th>SUPPRIMER</th>
                                </thead>
                                <tbody>
                                <?php include "../../core/SAV.php";
                                $S=new SAV();
                                if(isset($_GET['page'])) {
                                    $page=$_GET['page'];
                                } else {
                                    $page="";
                                }
                                if($page == "" || $page ==1) {
                                    $page_1 =0 ;
                                } else {
                                    $page_1=($page*6)-6;
                                }
                                $result =$S->afficher($page_1);

                                $count=ceil(($S->count())/6);



foreach ($result as $row)

                                {

                                    ?>
                                    <tr>

                                        <td><?php echo $row["id_SAV"]?></td>
                                        <td><?php echo $row["ref_commande"]?></td>
                                        <td><?php echo $row["id_user"]?></td>
                                        <td><?php echo $row["contenu"]?></td>

                                        <td> <img alt="NON DISPONIBLE" src="../reclamation/<?php echo $row["image"]?>" ></td>


                                        <?php if( $row["etat"]=="traité") {?>
                                            <td><span style="color: green"><?php echo $row["etat"]?></span></td>
                                        <?php }
                                        else {?>
                                            <td><span style="color: red"><?php echo $row["etat"]?></span></td>
                                        <?php } ?>
                                        <td>

                                            <form method="POST" action="../../core/modifier_SAV.php" >
                                                <input hidden name="email" value="<?php echo $row["id_user"]?>">
                                                <input hidden name="IDSUP" value="<?php echo $row["id_SAV"]?>">
                                                <?php if( $row["etat"]=="traité") {?>
                                        <td><p  style="position: relative; right: 70px" data-placement="top" data-toggle="tooltip" title="traiter"><button   disabled type="submit" class="fas fa-edit" ></span></button></p></td>
                                      <?php } else {  ?>
                                        <td><p style="position: relative; right: 70px" data-placement="top" data-toggle="tooltip" title="traiter"><button  type="submit" class="fas fa-edit" ></span></button></p></td>
                                        <?php } ?>
                                        </form>
                                        <form method="POST" action="../../core/supprimer_SAV.php" >


                                            <input hidden name="IDSUP" value="<?php echo $row["id_SAV"]?>">


                                            <td><p style="position: relative; right: 70px" data-placement="top" data-toggle="tooltip" title="supprimer"><button type="submit" class="fas fa-trash-alt fa-sm text-danger-50" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                        </form>
                                    </tr>
                                <?php } ?>
                                </tbody>

                            </table>



                        </div>
                        <div>
                            <ul class="pagination">
                                <?php
                                if($count>1)
                                {
                                    for($i=1;$i<=$count;$i++) {
                                        if($i==$page)
                                        { echo "<li> <a style='   background: grey ; width: 10px' href='Service.php?page={$i}'>{$i}</a> </li>  " ; }
                                        else {  echo "<li> <a href='Service.php?page={$i}'>{$i}</a> </li>  " ;}

                                    } }
                                ?>

                            </ul>
                        </div>

                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

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

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
