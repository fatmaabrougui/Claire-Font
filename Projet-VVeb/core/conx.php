
<?php
include 'config.php';

if(!empty($_POST['email']) && !empty($_POST['pass'])) {
    $pseudo = $_POST['email'];
    $pass = $_POST['pass'];

    try {
        $db = config::getConnexion();
        $db->exec('SET NAMES utf8');
    } catch (Exeption $e) {
        die('Erreur:' . $e->getMessage());
    }
    $req = $db->prepare('SELECT id_client FROM client WHERE adresse_client=:pseudo && mdp_client=:pass');
    $req->execute(array(':pseudo' => $pseudo, ':pass' => $pass));
    if ($req->rowCount() > 0){
        session_start();
        $_SESSION['l']= $pseudo;
        $_SESSION['p']= $pass;
        echo '

    <script type=""> location.replace("alert_succes_login.html");</script>

 ';

    }

    else
    {
        echo '

    <script type=""> location.replace("alert_error_login_notamember.html");</script>

 ';
    }
}





//echo json_encode($data);



?>