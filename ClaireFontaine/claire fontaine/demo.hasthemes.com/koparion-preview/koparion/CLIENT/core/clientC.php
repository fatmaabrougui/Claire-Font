<?PHP
include "../config.php";
class clientC {
function afficherClient ($client){
		echo "id_client: ".$client->getidclient()."<br>";
		echo "nom_client: ".$client->getnomclient()."<br>";
		echo "prenom_client: ".$client->getprenomclient()."<br>";
		echo "email_client: ".$client->getemailclient()."<br>";
		echo "pwd_client: ".$client->getpwdclient()."<br>";
		echo "tel_client: ".$client->gettelclient()."<br>";
		echo "categorie_client: ".$client->getcategorieclient()."<br>";
	}
	function ajouterClient($client){
		$sql="insert into client (id_client,nom_client,prenom_client,email_client,pwd_client,tel_client,categorie_client) values (:id_client,:nom_client,:prenom_client,:email_client,:pwd_client,:tel_client,:categorie_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$client->getidclient();
        $nom_client=$client->getnomclient();
        $prenom_client=$client->getprenomclient();
        $email_client=$client->getemailclient();
		$pwd_client=$client->getpwdclient();
		$tel_client=$client->gettelclient();
		$categorie_client=$client->getcategorieclient();

		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':prenom_client',$prenom_client);
		$req->bindValue(':email_client',$email_client);
       $req->bindValue(':pwd_client',$pwd_client);	
		$req->bindValue(':tel_client',$tel_client); 
        $req->bindValue(':categorie_client',$categorie_client);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients(){
		//$sql="SElECT * From client e inner join formationphp.client a on e.id_client= a.id_client";
		$sql="SELECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($id_client){
		$sql="DELETE FROM client where id_client= :id_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierClient($client,$id_client){
		$sql="UPDATE client SET id_client=:id_clientn,nom_client=:nom_client,prenom_client=:prenom_client,email_client=:email_client,pwd_client=:pwd_client,tel_client=:tel_client,categorie_client=:categorie_client WHERE id_client=:id_client";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_clientn=$client->getidclient();
        $nom_client=$client->getnomclient();
        $prenom_client=$client->getprenomclient();
        $email_client=$client->getemailclient();
		$pwd_client=$client->getpwdclient();
		$tel_client=$tel_client->gettelclient();
		$categorie_client=$categorie_client->getcategorieclient();
		$datas = array(':id_clientn'=>$id_clientn,':id_client'=>$id_client,':nom_client'=>$nom_client,':prenom_client'=>$prenom_client,':email_client'=>$email_client,':pwd_client'=>$pwd_client,':tel_client'=>$tel_client,':categorie_client'=>$categorie_client);
		$req->bindValue(':id_clientn',$id_clientn);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':prenom_client',$prenom_client);
		$req->bindValue(':email_client',$email_client);
		$req->bindValue(':pwd_client',$pwd_client);	
        $req->bindValue(':tel_client',$tel_client);
        $req->bindValue(':categorie_client',$categorie_client);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererClient($id_client){
		$sql="SELECT * from client where id_client=$id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeClients($categorie_client){
		$sql="SELECT * from client where categorie_client=$categorie_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>