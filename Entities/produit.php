<?php
class produit
{
private $id_produit;
private $titre;
private $categorie;
private $description;
private $prix;
private $image;
private $stock;

function __construct( $id_produit,$titre, $categorie, $description, $prix,$image,$stock)
{
		$this->id_produit = $id_produit;
		$this->titre = $titre;
		$this->categorie = $categorie;
		$this->description = $description;
   $this->image = $image;
		$this->prix = $prix;
		$this->stock= $stock;}
	function getId_produit () {
		return $this->id_produit;
	}
	function getTitre(){
		return $this->titre;
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
	function getStock(){
		return $this->stock;
	}

function setId_produit ($id_produit) {
	return $this->id_produit=$id_produit;
}
function setTitre($titre){
	return $this->titre=$titre;}
	
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
function setStock($stock){
	return $this->stock=$stock;
}

}







 ?>
