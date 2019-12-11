<?PHP
include_once "../../config.php";

class produitC {

	function ajouterProduit ($produit){
		$sql="insert into produit (id_produit,titre,categorie,description,prix,image,stock) values (:id_produit,:titre,:categorie,:description,:prix,:image,:stock)";
		$db = config::getConnexion();

        $req=$db->prepare($sql);

        $id_produit=$produit->getId_produit();
				$titre=$produit->getTitre();
        $description=$produit->getDescription();
		$prix=$produit->getPrix();
        $image=$produit->getImage();
		$categorie=$produit->getCategorie();
		$stock=$produit->getStock();

        try{
            $req->bindValue(':id_produit',$id_produit);
						$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':categorie',$categorie);
			$req->bindValue(':stock',$stock);


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
	function modifierproduit($id_produit,$titre,$description,$prix,$categorie,$stock){
	    $img='';
	 //   if($produit->getImage()){$img=",image='".$produit->getImage()."'";}
		$sql="UPDATE produit SET id_produit=:id_produit,titre=:titre,description=:description,prix=:prix,categorie=:categorie,stock=:stock WHERE id_produit=:id_produit";
$db = config::getConnexion();
        $req=$db->prepare($sql);
    try{
			$req->bindValue(':id_produit',$id_produit);
			$req->bindValue(':titre',$titre);
$req->bindValue(':description',$description);
$req->bindValue(':prix',$prix);
$req->bindValue(':categorie',$categorie);
$req->bindValue(':stock',$stock);


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
	function valableProduit($id,$stock)
		  {

			$sql="UPDATE produit SET stock=:stock where id_produit=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':stock',$stock);
			$req->bindValue(':id',$id);
			$req=$req->execute();

		}

		function trierproduitprix()
		{
	  		$db = config::getConnexion();
	       		$sql="SELECT * FROM produit order by prix";
				  // $sql="SELECT * from produit where description LIKE '%$foo%' ";
			try{
	 		$req=$db->prepare($sql);
	 	    $req->execute();
	 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
			return $produit;
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}



}

?>
