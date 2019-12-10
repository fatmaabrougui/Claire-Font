<?PHP
include "../../core/categorieC.php";
$categorieC=new categorieC();
if (isset($_GET["id_categorie"])){
    $categorieC->supprimerCategorie($_GET["id_categorie"]);
    header('Location: afficherCategorie.php');
}

?>
