<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=clairefontaine', 'root', '');

if(isset($_SESSION['id_client'])) {
   $requser = $bdd->prepare("SELECT * FROM client WHERE id_client = ?");
   $requser->execute(array($_SESSION['id_client']));
   $user = $requser->fetch();
   if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom_client']) {
      $newnom = htmlspecialchars($_POST['newnom']);
      $insertnom = $bdd->prepare("UPDATE client SET nom_client = ? WHERE id_client = ?");
      $insertnom->execute(array($newnom, $_SESSION['id_client']));
      header('Location: profil.php?id_client='.$_SESSION['id_client']);
   }
   if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom_client']) {
      $newnom = htmlspecialchars($_POST['newprenom']);
      $insertnom = $bdd->prepare("UPDATE client SET nom_client = ? WHERE id_client = ?");
      $insertnom->execute(array($newnom, $_SESSION['id_client']));
      header('Location: profil.php?id_client='.$_SESSION['id_client']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['email_client']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE client SET email_client = ? WHERE id_client = ?");
      $insertmail->execute(array($newmail, $_SESSION['id_client']));
      header('Location: profil.php?id_client='.$_SESSION['id_client']);
   }
   if(isset($_POST['newtel']) AND !empty($_POST['newtel']) AND $_POST['newtel'] != $user['tel_client']) {
      $newmail = htmlspecialchars($_POST['newtel']);
      $insertmail = $bdd->prepare("UPDATE client SET tel_client = ? WHERE id_client = ?");
      $insertmail->execute(array($newmail, $_SESSION['id_client']));
      header('Location: profil.php?id_client='.$_SESSION['id_client']);
   }
   if(isset($_POST['newcategorie']) AND !empty($_POST['newcategorie']) AND $_POST['newcategorie'] != $user['categorie_client']) {
      $newmail = htmlspecialchars($_POST['newcategorie']);
      $insertmail = $bdd->prepare("UPDATE client SET categorie_client = ? WHERE id_client = ?");
      $insertmail->execute(array($newmail, $_SESSION['id_client']));
      header('Location: profil.php?id_client='.$_SESSION['id_client']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = $_POST['newmdp1'];
      $mdp2 = $_POST['newmdp2'];
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE client SET pwd_client = ? WHERE id_client = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id_client']));
         header('Location: profil.php?id_client='.$_SESSION['id_client']);
      } else 
         $msg = "Vos deux mdp ne correspondent pas !";
   }

?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Edition de mon profil</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Nom :</label>
               <input type="text" name="newnom" placeholder="nom" value="<?php echo $user['nom_client']; ?>" /><br /><br />
               <label>Prenom :</label>
               <input type="text" name="newprenom" placeholder="prenom" value="<?php echo $user['prenom_client']; ?>" /><br /><br />
               <label>Mail :</label>
               <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['email_client']; ?>" /><br /><br />
               <label>Mot de passe :</label>
               <input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
               <label>Confirmation - mot de passe :</label>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               <label>Numéro de téléphone :</label>
               <input type="number" name="newtel" placeholder="XX-XXX-XXX" value="<?php echo $user['tel_client']; ?>" /><br /><br />
               <label>Categorie :</label>
               <input type="text" name="newcategorie" placeholder="Categorie" value="<?php echo $user['categorie_client']; ?>" /><br /><br />
               <input type="submit" value="Mettre à jour mon profil !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>