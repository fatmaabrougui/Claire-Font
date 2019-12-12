<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=clairefontaine', 'root', '');

if(isset($_GET['id_client']) AND $_GET['id_client'] > 0) {
   $getid_client = intval($_GET['id_client']);
   $requser = $bdd->prepare('SELECT * FROM client WHERE id_client = ?');
   $requser->execute(array($getid_client));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['nom_client']; ?></h2>
         <br /><br />
         Nom = <?php echo $userinfo['nom_client']; ?>
         <br />
         email_client = <?php echo $userinfo['email_client']; ?>
         <br />
         <?php
         if(isset($_SESSION['id_client']) AND $userinfo['id_client'] == $_SESSION['id_client']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>