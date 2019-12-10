<?PHP
include_once "../../config.php";

class produitC {

	function ajouterProduit ($produit){
		$sql="insert into produit (id_produit,categorie,description,prix,image) values (:id_produit,:categorie,:description,:prix,:image)";
		$db = config::getConnexion();

        $req=$db->prepare($sql);

        $id_produit=$produit->getId_produit();
        $description=$produit->getDescription();
		$prix=$produit->getPrix();
        $image=$produit->getImage();
		$categorie=$produit->getCategorie();

        try{
            $req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':categorie',$categorie);


                 $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->get;
        }

	}


	function afficherproduits(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.id_p= a.id_p";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerproduit($id_produit){
	//	$sql='DELETE FROM produit where id_produit= :id_produit';
		$sql=	'DELETE FROM produit  WHERE produit.id_produit = :id_produit';
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($id_produit,$description,$prix,$categorie){
	    $img='';
	 //   if($produit->getImage()){$img=",image='".$produit->getImage()."'";}
		$sql="UPDATE produit SET id_produit=:id_produit,description=:description,prix=:prix,categorie=:categorie WHERE id_produit=:id_produit";
$db = config::getConnexion();
        $req=$db->prepare($sql);
    try{
			$req->bindValue(':id_produit',$id_produit);
$req->bindValue(':description',$description);
$req->bindValue(':prix',$prix);
$req->bindValue(':categorie',$categorie);


            $s=$req->execute();

           header('Location: afficherProduit.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }

	}
	function recupererproduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$l=$db->query($sql);
		$liste=$l->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


}

?>
