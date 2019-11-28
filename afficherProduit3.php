<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits3=$produit1C->afficherProduits3();

//var_dump($listeEmployes-> fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Refe</td>
<td>Couleur</td>
<td>Quantite</td>
<td>Prix</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['refe']; ?></td>
	<td><?PHP echo $row['couleur']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	
	<td><form method="POST" action="supprimerProduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['refe']; ?>" name="refe">
	</form>
	</td>
	<td><a href="modifierProduit.php?refe=<?PHP echo $row['refe']; ?>">
	Modifier</a></td> 
	</tr>
	<?PHP
}
?>
</table>