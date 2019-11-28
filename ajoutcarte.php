<?php
session_start ();  
include "../core/carteC.php";
include "../entities/carte.php";
include "../core/clientC.php";
include "../entities/client.php";
if(isset($_POST['username']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin'])&& isset($_POST['confirme']))
   { 
   $carte1=new Carte($_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['confirme']);
   
    
  $carte1c=new carteC();
  $carte1c->ajouterCarte($carte1);
  $clientc=new clientC();
  $clientc->setcf($_POST['username']);
echo "<META http-equiv='refresh' content='0;URL=pdf_event.php'>";

}
else {
  echo "non";
}





?>