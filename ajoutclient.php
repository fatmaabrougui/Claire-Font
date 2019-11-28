<?php
include "../core/clientC.php";
include "../entities/client.php";
if(isset($_POST['username']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['num']) && isset($_POST['mail']) && isset($_POST['password']))
   {    
   $client1=new Client($_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['num'],$_POST['password']);
   

  $client1c=new clientC();
  $client1c->ajouterClient($client1);
echo "<META http-equiv='refresh' content='0;URL=login.html'>";
}
else {
  echo "non";
}





?>