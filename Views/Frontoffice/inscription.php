<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=clairefontaine', 'root', '');
echo "string";

if(isset($_POST['forminscription'])) {
   $nom_client = htmlspecialchars($_POST['nom_client']);
   $prenom_client = htmlspecialchars($_POST['prenom_client']);
   $email_client = htmlspecialchars($_POST['email_client']);
   $email_client2 = htmlspecialchars($_POST['email_client2']);
   $pwd_client = sha1($_POST['pwd_client']);
   $pwd_client2 = sha1($_POST['pwd_client2']);
   $tel_client = $_POST['tel_client'];
   $nom_categorie = $_POST['nom_categorie'];
   if(!empty($_POST['nom_client']) AND !empty($_POST['email_client']) AND !empty($_POST['email_client2']) AND !empty($_POST['pwd_client']) AND !empty($_POST['pwd_client2'])AND !empty($_POST['tel_client'])AND !empty($_POST['nom_categorie'])) {
      $nom_clientlength = strlen($nom_client);
      if($nom_clientlength <= 255) {
         if($email_client == $email_client2) {
            if(filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM client WHERE email_client = ?");
               $reqmail->execute(array($email_client));
               $email_clientexist = $reqemail_client->rowCount();
               if($email_clientexist == 0) {
                  if($pwd_client == $pwd_client2) {
                     $longueurKey = 7;
                     $key = "";
                     for($i=1;$i<$longueurKey;$i++)
                     {
                        $key.= mt_rand(0,9);
                     }
                     $insertmbr = $bdd->prepare("INSERT INTO client(id_client,nom_client,prenom_client,email_client, pwd_client,tel_client,nom_categorie,confirmkey) VALUES(NULL,?,?,?,?,?,?,?)");
                     $insertmbr->execute(array(NULL,$nom_client,$prenom_client,$email_client,$pwd_client,$tel_client,$nom_categorie,$key));
                     $header = "MIME-Version: 1.0\r\n";
                     $header.= 'From:"Clairefontaine.com"<support@cairefontaine.com>'."\n";
                     $header.='Content-Type:text/html; charset="uft-8"'."\n";
                     $header.='Content-Transfer-Encoding: 8bit';

                     $message='
                     <html>

                     <body>
                        <div align="center">
                           <a href="localhost/projetwebCRUD/views/confirmation.php?mail='.urlencode($email_client).'&key='.$key.'">Confirmez votre mail !</a>
                        </div>
                     </body>
                     </html>
                     ';
                     mail($mail, "Confirmation de compte",$message,$header);
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>