


	//Fonction 2:
	function validate()
	{
		var valide = true;
		//var valideprenom = false;
		//var validemdp = false;
		//var validemap = false;
		//var validetelephone = false;
		//var valideadresse = false;
		//var valideville = false;
		//const form =document.getelemnetbyid('form') ;
		//const nom =document.getelemnetbyid('nom') ;
		//const prenom =document.forgetelemnetbyid('prenom') ;
		//const mdp =document.getelemnetbyid('mdp') ;
		//const map =document.getelemnetbyid('map') ;
		//const telephone =document.tgetelemnetbyid('telephone') ;
		//const adresse =document.formgetelemnetbyid('adresse') ;
		//const ville =document.fogetelemnetbyid('ville') ;
		//var phoneno = /^\d{10}$/;
        //document.addeventlistener('submit',(e)=>{e.preventDefault()})
		console.log(document.getelemnetbyid("mdp1").value);
		if ( document.getelemnetbyid("success").value.length < 3 ) 
		{
			valide = false;
			alert('le nom doit contenir au moins 3 caractères');
 		}
		else if ( form.prenom.value.length < 3 ) 
		{
			valide = false;
			alert('le prenom doit contenir au moins 3 caractères');
 		}
		else if ( form.mdp.value.length < 6 ) 
		{
			valide = false;
			alert('le mot de passe doit contenir au moins 6 caractères');
 		}
		else if(document.getelemnetbyid("mdp1").value != document.getelemnetbyid("mdp2").value)
		{
			valide = false;
			console.log("Les deux mots de passe que vous venez de saisir sont différentes ! ")
			alert("Les deux mots de passe que vous venez de saisir sont différentes ! ");
		}
          
		else if ( form.adresse.value.length < 3 ) 
		{
			valide = false ;
			alert('l"adresse doit contenir au moins 3 caractères');
 		}
		else if ( form.ville.value.length < 3 ) 
		{
			valide = false;
			alert('la ville doit contenir au moins 3 caractères');
 		}
 		else if (form.telephone.value.length<8) 
 		{
 			valide = false;
					alert('le numero de telephone doit contenir 8 chiffres');
 		}
		//else {return true ;};
		if(valide){return true} else {return false} ;
	//e.preventDefault()})
}