<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=clairefontaine', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = $_POST['mdpconnect'];
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM client WHERE email_client = ? AND pwd_client = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      echo $userexist;
      if($userexist == 1) {

         $userinfo = $requser->fetch();
         $_SESSION['id_client'] = $userinfo['id_client'];
         $_SESSION['nom_client'] = $userinfo['nom_client'];
         $_SESSION['prenom_client'] = $userinfo['prenom_client'];
         $_SESSION['email_client'] = $userinfo['email_client'];
         header("Location: profil.php?id_client=".$_SESSION['id_client']);
      } else {
         $erreur = "Mauvais email_client ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Adresse Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>