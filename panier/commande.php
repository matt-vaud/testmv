!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css.css" type="text/css"/>
		<meta charset="utf-8" />
		<title>Hextech driver </title>
		<H1 align="center"><FONT size ="7" color ="red"> Hextech Driver </FONT> </H1> 
	<head>


	<form>
  		<input type="button" value="Ajouter au panier">

     <p>La machine est arrêtée.</p>

	</form>
	<script>


 

var btn = document.querySelector('input');
var txt = document.querySelector('p');

btn.addEventListener('click', updateBtn);

function updateBtn() {
  if (btn.value === 'Ajouter au panier') {
    btn.value = 'Retirer du panier';
    txt.textContent = 'Le produit a été rajouter au panier ';
  } else {
    btn.value = 'Ajouter au panier';
    txt.textContent = 'Le produit n\'est pas dans votre panier';
  }
}

	</script>
<html>