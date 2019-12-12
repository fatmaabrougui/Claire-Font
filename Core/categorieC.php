<?PHP
include_once "../../config.php";

class categorieC {

	function ajouterCategorie ($categorie){
		$sql="insert into categorie (id_categorie,nom_categorie) VALUES (:id_categorie,:nom_categorie)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_categorie=$categorie->getId_Categorie();
        $nom_categorie=$categorie->getNom_Categorie();
 	$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}


	function affichercategories(){
		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id_cat= a.id_cat";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimercategorie($id_categorie){
		$sql='DELETE FROM categorie where categorie.id_categorie= :id_categorie';
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_categorie',$id_categorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($id_categorie,$nom_categorie){

	 //   if($produit->getImage()){$imgimage='".$produit->getImage()."'";}
		$sql="UPDATE categorie SET id_categorie=:id_categorie,nom_categorie=:nom_categorie WHERE id_categorie=:id_categorie";
$db = config::getConnexion();
        $req=$db->prepare($sql);
    try{

			$req->bindValue(':id_categorie',intval($id_categorie));
$req->bindValue(':nom_categorie',$nom_categorie);


            $s=$req->execute();

        //   header('Location: afficherCategorie.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }

	}
	function recuperercategorie($id_categorie){
		$sql="SELECT * from categorie where id_categorie=$id_categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListecategories($prix){
		$sql="SELECT * from categorie where PrixDisc=$prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/**/
}

?>
