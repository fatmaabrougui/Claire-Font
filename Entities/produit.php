<?php
class produit
{
private $id_produit;
private $categorie;
private $description;
private $prix;
private $image;

function __construct( $id_produit, $categorie, $description, $prix,$image)
{
		$this->id_produit = $id_produit;
		$this->categorie = $categorie;
		$this->description = $description;
   $this->image = $image;
		$this->prix = $prix;}
	function getId_produit () {
		return $this->id_produit;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getDescription(){
		return $this->description;
	}
	function getPrix(){
		return $this->prix;
	}
	function getImage(){
		return $this->image;
	}

function setId_produit ($id_produit) {
	return $this->id_produit=$id_produit;
}
function setCategorie($categorie){
	return $this->categorie=$categorie;}

function setDescription($description){
	return $this->description=$description;
}

	function setPrix($prix){
		return $this->prix=$prix;
	}
function setImage($image){
	return $this->image=$image;
}

}







 ?>
