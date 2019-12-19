<?php   session_start();
if (!isset($_SESSION['l']))
{header('Location: login.php');}
include "../entity/SAVS.php";
include "../core/SAV.php";
$s=new SAV();
$info=$s->selectcommande($_SESSION['l']);


?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:47:09 GMT -->
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
    <style>
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);




        textarea{
            background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_message.png) no-repeat scroll 16px 16px;
            width: 276px;
            height: 110px;
            border: 1px solid rgba(255,255,255,.6);
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            display:block;
            font-family: 'Source Sans Pro', sans-serif;
            font-size:18px;
            color:#fff;
            padding-left:45px;
            padding-right:20px;
            padding-top:12px;
            margin-bottom:20px;
            overflow:hidden;
        }

        input {
            width: 276px;
            height: 48px;
            border: 1px solid rgba(255,255,255,.4);
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            display:block;
            font-family: 'Source Sans Pro', sans-serif;
            font-size:18px;
            color:#fff;
            padding-left:20px;
            padding-right:20px;
            margin-bottom:20px;
        }

        input[type=submit] {
            cursor:pointer;
        }

        input.name {
            background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_name.png) no-repeat scroll 16px 16px;
            padding-left:45px;
        }

        input.email {
            background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_email.png) no-repeat scroll 16px 20px;
            padding-left:45px;
        }

        input.message {
            background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_message.png) no-repeat scroll 16px 16px;
            padding-left:45px;
        }

        ::-webkit-input-placeholder {
            color: #fff;
        }

        :-moz-placeholder{
            color: #fff;
        }

        ::-moz-placeholder {
            color: #fff;
        }

        :-ms-input-placeholder {
            color: #fff;
        }

        input:focus, textarea:focus {
            background-color: rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
            -webkit-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
            box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
            overflow: hidden;
        }

        .btn {
            width: 138px;
            height: 44px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            float:right;
            border: 1px solid #253737;
            background: #416b68;
            background: -webkit-gradient(linear, left top, left bottom, from(#6da5a3), to(#416b68));
            background: -webkit-linear-gradient(top, #6da5a3, #416b68);
            background: -moz-linear-gradient(top, #6da5a3, #416b68);
            background: -ms-linear-gradient(top, #6da5a3, #416b68);
            background: -o-linear-gradient(top, #6da5a3, #416b68);
            background-image: -ms-linear-gradient(top, #6da5a3 0%, #416b68 100%);
            padding: 10.5px 21px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            -webkit-box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
            -moz-box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
            box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
            text-shadow: #333333 0 1px 0;
            color: #e1e1e1;
        }

        .btn:hover {
            border: 1px solid #253737;
            text-shadow: #333333 0 1px 0;
            background: #416b68;
            background: -webkit-gradient(linear, left top, left bottom, from(#77b2b0), to(#416b68));
            background: -webkit-linear-gradient(top, #77b2b0, #416b68);
            background: -moz-linear-gradient(top, #77b2b0, #416b68);
            background: -ms-linear-gradient(top, #77b2b0, #416b68);
            background: -o-linear-gradient(top, #77b2b0, #416b68);
            background-image: -ms-linear-gradient(top, #77b2b0 0%, #416b68 100%);
            color: #fff;
        }

        .btn:active {
            margin-top:1px;
            text-shadow: #333333 0 -1px 0;
            border: 1px solid #253737;
            background: #6da5a3;
            background: -webkit-gradient(linear, left top, left bottom, from(#416b68), to(#416b68));
            background: -webkit-linear-gradient(top, #416b68, #609391);
            background: -moz-linear-gradient(top, #416b68, #6da5a3);
            background: -ms-linear-gradient(top, #416b68, #6da5a3);
            background: -o-linear-gradient(top, #416b68, #6da5a3);
            background-image: -ms-linear-gradient(top, #416b68 0%, #6da5a3 100%);
            color: #fff;
            -webkit-box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
            -moz-box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
            box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
        }





    </style>
</head>

<body>
    <!-- header-area-start -->
<?php include 'header.php' ?>

    <!-- header-area-end -->
    <!-- banner-area-start -->
    <div class="banner-area banner-res-large pt-30 pb-5">
        <div class="container">
            <div class="row" style="height: 950px ; " >
                <!--  Product Details -->
                <div id="form-main" >
                    <h1 style="position: relative ; right: -330px" > SERVICE APRES VENTE</h1>
                    <br>
                    <div id="form-div" style="width: 500px ; position: relative;right: -300px">

                        <form method="post" action="../core/ajoutSAV.php" enctype="multipart/form-data" style="
    margin-left:auto;
    margin-right:auto;
    width: 423px;

    padding:30px;
    border: 1px solid rgba(0,0,0,.2);
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    background: rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    overflow: hidden;
">
                            <h4>Client :</h4>
                            <input name="emailaddress" value="<?php echo $_SESSION['l'] ?>" readonly class="email" type="email" required />
                            <h3> Reference commande</h3>

                            <?php if ($info->rowCount()>0) { ?>
                            <select class="myselect" style="width:200px;" name="ref" id="ref"> <?php
                                foreach($info as $row) { ?>

                                    <option value="<?PHP echo $row['id_commande'] ;?>">Reference :  <?PHP echo $row['id_commande'] ;}?></option>

                            </select>
                            <br>
                            <?php } else { ?>  <h4 style="color:#ff004a">vous n'avez aucune commande </h4>    <?php } ?>
                            <br>
                            <h4>Message :*</h4>
                            <textarea rows="4" cols="50"  name="message" placeholder="message*" class="message" required></textarea>
                            <h3> joindre une image (facultatif)</h3>

                            <input type="file" id="images_input" name="fileToUpload" onchange="readURL(this);" >
                            <img id="blah" src="#" alt="" />
                            <br>
                            <br>

                            <div>  <a style="overflow: hidden;" href="" data-toggle="modal" data-target="#exampleModal" ><h4>conditions d'utilisation </h4>  </a>  <input  style="position: relative; right: -290px;top: -32px ; width: 20px; height: 20px" type="checkbox"  required  /> </div>
                            <?php if ($info->rowCount()>0) { ?>
                                <input name="button-blue"  style=" background: orangered ; color: white ; position: relative; right: -40px"  type="submit" value="Envoyer" />
                            <?php } else { ?>  <input type="submit"  style=" background: orangered ; color: white ; position: relative; right: -40px"  data-toggle="modal" data-target="#exampleModal2"  value="Envoyer" id="button-blue" name="button-blue"/> <?php }?>
                        </form>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
        </div>
    </div>
    <!-- /section -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conditions d'utilisation</h5>

                </div>
                <div class="modal-body" >
                    "En naviguant sur notre site, l’internaute reconnaît avoir pris connaissance et accepté nos conditions générales d’utilisation

                    Données personnelles :

                    Les données personnelles qui peuvent vous être demandées (exclusivement en vue de recevoir notre newsletter) sont vos nom prénom et adresse mails.
                    Le traitement de ces données dont le responsable est Mr J. Rolle est en conformité avec le Règlement général de protection des données personnelles entré en vigueur le 25 Mai 2018.
                    Vous pouvez faire valoir vos droits de consultation, de rectification et de suppression en le contactant à l’adresse suivante [e-mail]
                    Nous nous engageons à ne pas revendre ni donner ces informations qui ne sont pas conservées dès lors que vous demandez à ne plus recevoir notre newsletter.

                    Cookies :

                    En vue d’améliorer notre site, nous utilisons Google Analytics qui est un outil « d'analyse d'audience Internet permettant aux propriétaires de sites Web et d'applications de mieux comprendre le comportement de leurs utilisateurs. Cet outil peut utiliser des cookies pour collecter des informations et générer des rapports sur les statistiques d'utilisation d'un site Web sans que les utilisateurs individuels soient identifiés personnellement par Google.
                    Outre la génération de rapports sur les statistiques d'utilisation d'un site Web, Google Analytics permet également, en association avec certains des cookies publicitaires décrits ci-dessus, d'afficher des annonces plus pertinentes sur les sites Google (tels que la recherche Google) et sur le Web. »
                    https://www.google.fr/intl/fr/policies/technologies/types/
                    Nous utilisons également les cookies nécessaires à l’amélioration de votre navigation sur notre site tenant compte exclusivement de votre navigateur.
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <h4 style="color: red">vous n'avez pas encore passé de commande , le service après vente n'est pas disponible</h4>
                </div>

            </div>
        </div>
    </div>

    <!-- social-group-area-end -->
    <!-- footer-area-start -->
    <?php include 'footer.php' ?>


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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script>

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(200)
                            .height(100);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }


        </script>

    <script type="text/javascript">
        $(".myselect").select2({
            placeholder: 'Select an option'
        });

    </script>
</body>


<!-- Mirrored from demo.hasthemes.com/koparion-preview/koparion/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 17:47:36 GMT -->
</html>