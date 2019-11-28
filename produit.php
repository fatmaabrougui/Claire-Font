<?php
class produit
{
private $id_produit;
private $categorie;
private $description;
private $titre;
private $auteur;
private $edition;
private $prix;
private $qt;
//private $qt_physique;
private $image;

function __construct( $id_prduit, $categorie, $description, $prix ,$titre ,$auteur,$edition ,$qt,$image )
{
		$this->id_prduit = $id_prduit;
   $this->image = $image;
		$this->categorie = $categorie;
		$this->description = $description;
		$this->prix = $prix;
		$this->qt = $qt;
		//$this->qt_physique = $qt_physique;
		$this->titre = $titre;
		$this->auteur = $auteur;
    $this->edition = $edition;


	}
	function getId_produit () {
		return $this->id_produit;
	}
	function getDescription(){
		return $this->description;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getImage(){
		return $this->image;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQt(){
		return $this->qt;
	}
/*	function getQt_physique (){
		return $this->qt_physique;*/
	}
	function getAuteur ()
	{ return $this->auteur;
	}
 function getEdition ()
{
	 return $this->edition;
}
function getTitre()
{
	return $this->titre;
}
function setId_produit ($id_produit) {
	return $this->id_produit=$id_prduit;
}
function setDescription($description){
	return $this->description=$description;
}
function setCategorie($categorie){
	return $this->categorie=$categorie;
}
function setImage($image){
	return $this->image=$image;
}
function setPrix($prix){
	return $this->prix=$prix;
}
function setQt($qt){
	return $this->qtt=$qt;
}
/*function setQt_physique ($qt_physique){
	return $this->qt_physique=$qt_physique;*/

function setAuteur ($auteur)
{return $this->auteur=$auteur;
}
function setEdition ($edition)
{
 return $this->edition=$edition;
}
function setTitre($titre)
{
return $this->titre=$titre;
}











 ?>
