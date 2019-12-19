<?php
include_once "config.php";
class SAV {

    function ajouter1($sav){
        $sql="insert into sav (id_user,ref_commande,contenu) values (:user,:ref,:contenu)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $user=$sav->getIdClient();
            $ref=$sav->getIdCommande();
            $contenu=$sav->getContenu();

            $req->bindValue(':user',$user);
            $req->bindValue(':ref',$ref);
            $req->bindValue(':contenu',$contenu);
            $req->execute();

        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

    }
    function ajouter2($sav){
        $sql="insert into sav (id_user,ref_commande,contenu,image) values (:user,:ref,:contenu,:image)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $user=$sav->getIdClient();
            $ref=$sav->getIdCommande();
            $contenu=$sav->getContenu();
            $image=$sav->getImage();

            $req->bindValue(':user',$user);
            $req->bindValue(':ref',$ref);
            $req->bindValue(':contenu',$contenu);
            $req->bindValue(':image',$image);
            $req->execute();

        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

    }

    function afficher($var){

        $query = "SELECT * FROM sav  LIMIT $var,6 ";

        $db = config::getConnexion();
        try{
            $S=$db->query( $query);
            return $S;

        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();

        }

    }
    function count(){
        $sql="SELECT * FROM sav";
        $db = config::getConnexion();
        try{
            $S=$db->query($sql);
            return $S->rowCount();
        }
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }
    }

    function selectcommande($user){

        $query = "SELECT * FROM commande where id_user='$user' ";

        $db = config::getConnexion();
        try{

            return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();

        }

    }


    function supprimer($id){
        $var=$id;
        $sql = "DELETE FROM sav WHERE id_SAV ='". $var. "'";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $req->execute();
            return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
            return ("no");
        }

    }

    function traiter($id){
        $var=$id;
        $sql = "UPDATE sav SET  etat = 'traité' WHERE id_SAV = '".$var."'";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $req->execute();
            return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
            return ("no");
        }

    }

}