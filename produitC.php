<?PHP
include_once "../../config.php";

class produitC {
	/*
		echo "IdP: ".$produit->getIdP ()."<br>";
		echo "IdP: ".$produit->getDescription()."<br>";
		echo "PrixOrg: ".$produit->getPrixOrg()."<br>";
		echo "PrixDisc: ".$produit->getPrixDisc()."<br>";
		echo "Image: ".$produit->getIamge()."<br>";
		echo "Available: ".$produit->getAvailable ()."<br>";
		echo "IdC: ".$produit->getIdC()."<br>";
	}
*/
	function ajouterProduit ($produit){
		$sql="insert into produit (id_produit,description,prix,auteur,image,edition,titre,categorie,qt) values (:id_produit, :description, :prix, :auteur, :image, :edition, :titre, :categorie, :qt)";
		$db = config::getConnexion();

        $req=$db->prepare($sql);

        $id_produit=$produit->getId_produit();
        $description=$produit->getDescription();
		$prix=$produit->getPrix();
		$titre=$produit->getTitre();
        $image=$produit->getImage();
		$edition=$produit->getEdition();
		$categorie=$produit->getCategorie();
		$auteur=$produit->getAuteur();
		$qt=$produit->getQt();
        try{
            $req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':image',$image);
		$req->bindValue(':qt',$qt);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':auteur',$auteur);
		$req->bindValue(':edition',$edition);

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
		$sql="DELETE FROM produit where id_produit= :id_produit";
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
	function modifierproduit($produit,$id_produit_org){
	    $img='';
	    if($produit->getImage()){$img=",image='".$produit->getImage()."'";}
		$sql="UPDATE produit SET id_produit=:id_produit".$img.",description=:description,prix=:prix,auteur=:auteur,qt=:qt,categorie=:categorie,titre:=titre,edition:=edition WHERE id_produit=:id_produit_org";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

        $req=$db->prepare($sql);

				$id_produit=$produit->getId_produit();
				$description=$produit->getDescription();
		$prix=$produit->getPrix();
		$titre=$produit->getTitre();

		$edition=$produit->getEdition();
		$categorie=$produit->getCategorie();
		$auteur=$produit->getAuteur();
		$qt=$produit->getQt();
    try{
			$req->bindValue(':id_produit',$id_produit);
$req->bindValue(':description',$description);
$req->bindValue(':prix',$prix);
$req->bindValue(':titre',$titre);
$req->bindValue(':qt',$qt);
$req->bindValue(':categorie',$categorie);
$req->bindValue(':auteur',$auteur);
$req->bindValue(':edition',$edition);

            $s=$req->execute();

           // header('Location: index.php');
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
