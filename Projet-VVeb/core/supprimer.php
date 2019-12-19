<?php  

include "reclamation.php";
        $recl=new reclamation();
	$msg=$recl->supprimer($_POST["IDSUP"]);

	if($msg='ok')  
	{  
	?>
<script type=""> location.replace("supprimer.html");</script>
<?php
	}  
	else 
	{
		echo 'une erreur est survenue ';
	}
 ?>