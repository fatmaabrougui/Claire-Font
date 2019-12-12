<?php
if(isset($_GET['email_client'],$_GET['key']) AND !empty($_GET['email_client'])AND !empty($_GET['key']))
{	
	$email_client = htmlspecialchars(urldecode($_GET['email_client']));
	$key = htmlspecialchars($_GET['key']);
	$requser = $bdd->prepare("SELECT * FROM client WHERE email_client = ? AND confirmkey = ?");
	$requser->execute(array($email_client,$key));
	$userexist = $requser->rowCount();
	if($userexist == 1){
		$user = $requser->fetch();
		if($user['confirme'] == 0){
			$updateuser = $bdd->prepare("UPDATE client SET confirme = 1 WHERE email_client = ? AND confirmkey = ?");
			$updateuser->execute(array($pseudo,$key));
			echo "Votre compte a été bien confirmé";
		}
			else {echo "Votre compte a déjà été confirmé";}
		}
	}else {echo "L'utilisateur n'existe pas !";}
}
?>