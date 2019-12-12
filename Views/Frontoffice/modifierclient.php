<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modifier les information d'un client</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>
<?PHP
include "../../Entites/client.php";
include "../../Core/clientC.php";
if (isset($_GET['id_client'])){
	$clientC=new clientC();
    $result=$clientC->recupererclient($_GET['id_client']);
	foreach($result as $row){
		$id_client=$row['id_client'];
		$nom_client=$row['nom_client'];
        $prenom_client=$row['prenom_client'];
        $email_client=$row['email_client'];
        $pwd_client=$row['pwd_client'];
        $tel_client=$row['tel_client'];
		$categorie_client=$row['categorie_client'];
?>
<form method="POST">
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Modifier une client
    </div>
    <div class="panel-body">
        <form role="form">
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Saisir le id (optionel)</label>
                        <input type="number" class="form-control" id="warning" name="id_client" value="<?PHP echo $id_client ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Saisir le nom</label>
                        <input type="text" class="form-control" id="warning" name="nom_client" value="<?PHP echo $nom_client ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Saisir le prenom</label>
                        <input type="text" class="form-control" id="warning" name="prenom_client" value="<?PHP echo $prenom_client ?>"/>
					</div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Saisir le nouveau mail</label>
                        <input type="email" class="form-control" id="warning" name="email_client" value="<?PHP echo $email_client ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Resaisir le nouveau mail</label>
                        <input type="email" class="form-control" id="warning" name="email_client2" value="<?PHP echo $email_client ?>"/>
                    </div>
					<div class="form-group has-warning">
                        <label class="control-label" for="warning">Saisir le nouveau mot de passe</label>
                        <input type="number" class="form-control" id="warning" name="pwd_client" value="<?PHP echo $pwd_client ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Resaisir le nouveau mot de passe</label>
                        <input type="number" class="form-control" id="warning" name="pwd_client2" value="<?PHP echo $pwd_client ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Saisir votre numéro</label>
                        <input type="number" class="form-control" id="warning" name="tel_client" value="<?PHP echo $tel_client ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Saisir votre numéro</label>
                        <input type="number" class="form-control" id="warning" name="categorie_client" value="<?PHP echo $categorie_client ?>"/>
                    </div>
                </form>

<input type="submit" name="modifier" value="modifier">

<input type="hidden" name="id_client_ini" value="<?PHP echo $_GET['id_client'];?>">


</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['id_client'],$_POST['nom_client'],$_POST['prenom_client'],$_POST['email_client'],$_POST['pwd_client'],$_POST['tel_client'],$_POST['categorie_client']);
	$clientC->modifierclient($client,$_POST['id_client_ini']);
	echo $_POST['id_client_ini'];
	header('Location: afficherclient.php');
}
?>
</body>
</HTMl>