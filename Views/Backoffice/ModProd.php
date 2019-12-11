<?php

include_once "../../core/produitC.php";
include_once "../../entities/produit.php";



   /* $img=null;
    if (!empty($_FILES['img'])) {

      $extension_upload = $_FILES['img']['name'];
      move_uploaded_file($_FILES["img"]["tmp_name"], '../uploads/' .$extension_upload);
    }*/
//  $produit=new produit($_GET['id_produit'],$_GET['description'],$_GET['prix'],$_GET['categorie'],$extension_upload);
        $produitC=new produitC();

        $produitC->modifierproduit($_POST['id_produit'],$_POST['titre'],$_POST['description'],$_POST['prix'],$_POST['categorie'],$_POST['stock']);


       ?>
