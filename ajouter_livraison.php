<?php
include "../config1.php";

session_start();
if(isset($_SESSION['uname'])) {}
  else 	header('location:index.php');


?>
<?php
include "../entities/personne.php" ;
include "../core/personneC.php" ;

include "../config1.php";


if ( isset($_GET['nomC']) && isset($_GET['mailC']) && isset($_GET['telC'])&& isset($_GET['town']) && isset($_GET['state'])  && isset($_GET['zip']))
{
    $nomC=$_GET['nomC'];

	$mailC=$_GET['mailC'];
	$telC=$_GET['telC'];
	$town=$_GET['town'];
	$state=$_GET['state'];
  $zip=$_GET['zip'];

  if ( isset($_GET['nomC']) && isset($_GET['mailC']) && isset($_GET['telC'])&& isset($_GET['town']) && isset($_GET['state'])  && isset($_GET['zip']))
	{

		$c=new Livraison($_SESSION['uname'],$nomC,$mailC,$telC,$town,$state,$zip);
		$LivraisonC=new LivraisonC();
		$mes=$LivraisonC->ajouterLivraison($c);
    var_dump($c);
		if ($mes==true)
		{
			//header('Location:livraison.php');

	// header('Location:checkout.php');

		}
		else
		//
    {
     header('Location:checkout.php');

    }
}
}
?>
