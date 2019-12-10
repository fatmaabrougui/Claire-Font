<?PHP
include "../../core/produitC.php";
$produitC=new produitC();
if (isset($_GET["id_produit"])){

	$produitC->supprimerproduit($_GET["id_produit"]);
	header('Location: afficherProduit.php');
}

?>
