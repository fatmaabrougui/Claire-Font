<?php  

include "reclamation.php";

	 $recl=new reclamation();
	$msg=$recl->traiter($_POST["IDSUP"]);
	if($msg='ok')  
	{
        require_once "phpmailer/class.phpmailer.php";


        $message = "<p>cher client,</p>
      <p> nous vous informons que votre reclamation a été traitée</p>
 <p> nous vous contacterons dans les plus brefs délais </p>
      <p>meilleures salutations</p>
  ";





        $mail = new PHPMailer(true);


        $mail->IsSMTP();


        $mail->SMTPDebug = 0;


        $mail->SMTPAuth = true;

// sets the prefix to the server
        $mail->SMTPSecure = 'tls';


        $mail->Host = 'smtp.gmail.com';


        $mail->Port = 587;



        $mail->Username = 'emna.ketata@esprit.tn';


        $mail->Password = 'emnaemna123';


        $mail->SetFrom('emna@esprit.tn', 'emna');


        $mail->AddAddress($_POST["email"]);
        $mail->Subject = 'Reclamation';

//
        $mail->MsgHTML($message);




        if( $mail->Send()){

            ?>
<script type=""> location.replace("modification.html");</script>
<?php
	}  
	else 
	{
		echo 'error';
	}}
 ?>