<?php
$header = "MIME-Version: 1.0\r\n";
$header.= 'From:"Clairefontaine.com"<support@cairefontaine.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>

<body>
	<div align="center">
		J\'ai envoyé ce mail avec PHP !
		<br/>
	</div>
</body>
</html>
';
mail("kolosse10@gmail.com", "Salut test",$message,$header);
?>

