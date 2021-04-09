<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css.css" type="text/css"/>
    <meta charset="utf-8" />
    <title>Hextech driver </title>
    <H1 align="center"><FONT size ="7" color ="red"> Hextech Driver </FONT> </H1>
    
    <?php
		ini_set('display_errors', 1);

		ini_set('display_startup_errors', 1);
		
		error_reporting(E_ALL);
		
		$EMAIL = $_POST ['Email'];
		
		$PASSWORD = $_POST ['Mot_de_passe'];
		
		echo ("Votre mot de passe: ". $EMAIL) . "<br />\n"; 
		echo ("Votre mot de passe: ".$PASSWORD). "<br />\n";

		$mysqli =  new mysqli('localhost','admin','password2020','login');

		$chaine = "SELECT * FROM membres where email = '$EMAIL' ";

		$chaine2 = "SELECT * FROM membres where password = '$PASSWORD' ";

		$db = $mysqli->query($chaine);
		$db2 = $mysqli->query($chaine2) ;


		$test = false;

		if ($db->num_rows > 0 && $db2->num_rows > 0 )
			{

				$test = true;
				echo ("info dans la table");

			}

		if ($test == false)
			{
		
				echo("L'email ou le mot de passe est incorrect, veuillez verifier vos identifiants ou creer un nouveau compte");
			}
	
	?>
	
	<a href="formulaire.php"> <div align="center"> Rectifier ses erreurs </a>
	<a href="creer_un_compte.php"> <div align="center"> Se créer un compte </a>
  <head>
    <body>
 
  </body>
<html>

