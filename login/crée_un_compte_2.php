<DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css.css" type="text/css"/>
    <meta charset="utf-8" />
    <title>Hextech driver </title>
    <H1>Hextech Driver</H1>

	<?php

    	$Email2 = $_POST ['Email2'];
    	$Mot_de_passe2 = $_POST ['Mot_de_passe2'];

    	echo ("Votre E mail: ". $Email2 . "<br />\n"); 
    	echo ("Votre mot de passe: ". $Mot_de_passe2 . "<br />\n");

		$mysqli2 =  new mysqli('localhost','admin','password2020','login');

	$chaine3 = "INSERT INTO membres (email,password) VALUES ('$Email2 ','$Mot_de_passe2')";

    	echo ($chaine3);

	$db2 = $mysqli2->query($chaine3);
	
	$chaine4 = "INSERT INTO produits ('user') VALUES ('$Email2')";
	
	$db3 = $mysqli3->query($chaine4);
	
		echo("test réussi");
		echo("cc");
	?>

	
