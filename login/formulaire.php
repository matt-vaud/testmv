<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css.css" type="text/css"/>
		<meta charset="utf-8" />
		<title>Hextech driver </title>
		 <title>Hextech driver </title>
    	<H1 align="center"><FONT size ="7" color ="red"> Hextech Driver </FONT> </H1>

<FORM class ="formulaire1" action="afficher.php" method="POST">
				<div class="connect">
					<input type="text" name = "Email" value="Adresse Email"><BR>
					<input type="password" name = "Mot_de_passe" value="Mot de passe"><BR>
					<input type="submit" value="Envoyer" >
					<input type="checkbox" id="checkbox">
        			Afficher le mot de passe
    				</label>


				</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script type="text/javascript">
    			$(document).ready(function() {
    		    var checkbox = $("#checkbox");
        		var Mot_de_passe = $("#password");
        		checkbox.click(function() {
            		if(checkbox.prop("checked")) {
                password.attr("type", "text");
            		} else {
                password.attr("type", "password");
            }
        });
    });
</script>

