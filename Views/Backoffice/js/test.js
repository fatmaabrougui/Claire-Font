function testAjouProduit() {

    var retour= true;
  if(document.getElementById('id_produit').value=='' || document.getElementById('description').value=='' || document.getElementById('prix').value=='' || document.getElementById('qt').value=='' || document.getElementById('categorie').value=='' ){
      alert('Veuillez remplir tout les champs');
      retour= false;
  }
