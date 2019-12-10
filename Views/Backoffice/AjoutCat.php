<?php
include "../../core/categorieC.php";
include "../../entities/categorie.php";
  $categorieC=new categorieC();
if (!isset($_POST['ajouter'])){
    $categorie=new categorie($_POST['id_categorie'],$_POST['nom_categorie']);
      $categorieC=new categorieC();
    
    $categorieC->ajouterCategorie($categorie);

    header('Location: afficherCategorie.php');
}

?>
