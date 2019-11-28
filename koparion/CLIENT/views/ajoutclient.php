<?PHP
include "../entites/client.php";
include "../core/clientC.php";

if (isset($_POST['id_client']) and isset($_POST['nom_client']) and isset($_POST['prenom_client']) and isset($_POST['email_client']) and isset($_POST['pwd_client'])and isset($_POST['tel_client']) and isset($_POST['categorie_client'])){
$client1=new client($_POST['id_client'],$_POST['nom_client'],$_POST['prenom_client'],$_POST['email_client'],$_POST['pwd_client'],$_POST['tel_client'],$_POST['categorie_client']);

//Partie2
/*
var_dump($client1);
}
*/
//Partie3
$client1C=new clientC();
$client1C->ajouterclient($client1);
header('Location: afficherclient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>