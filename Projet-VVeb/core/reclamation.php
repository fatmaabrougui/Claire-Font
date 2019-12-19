<?php
include_once "config.php";
class reclamation {

    function ajouter1($reclamtion){
        $sql="insert into reclamations (user,type,contenu) values (:user,:type,:contenu)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $user=$reclamtion->getIdClient();
            $type=$reclamtion->getType();
            $contenu=$reclamtion->getContenu();

            $req->bindValue(':user',$user);
            $req->bindValue(':type',$type);
            $req->bindValue(':contenu',$contenu);
            $req->execute();

        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

    }
    function ajouter2($sav){
        $sql="insert into reclamations (user,type,contenu,image) values (:user,:type,:contenu,:image)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $user=$sav->getIdClient();
            $type=$sav->getType();
            $contenu=$sav->getContenu();
            $image=$sav->getImage();

            $req->bindValue(':user',$user);
            $req->bindValue(':type',$type);
            $req->bindValue(':contenu',$contenu);
            $req->bindValue(':image',$image);
            $req->execute();

        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

    }

    function afficher($var){

        $query = "SELECT * FROM reclamations LIMIT $var,6";

        $db = config::getConnexion();
        try{

            return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();

        }

    }

    function count(){
        $sql="SELECT * FROM  reclamations";
        $db = config::getConnexion();
        try{
            $S=$db->query($sql);
            return $S->rowCount();
        }
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }
    }



    function supprimer($id){
        $var=$id;
        $sql = "DELETE FROM reclamations WHERE 	Id_reclamation ='". $var. "'";
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
        $sql = "UPDATE reclamations SET  etat = 'traité' WHERE 	Id_reclamation = '".$var."'";
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