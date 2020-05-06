<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>VOD-Ajouter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/style.css" />
    </head>
    <body>
    <?php 
    $resultat = implode(":",$_GET);

	$file = fopen("data/vod.csv", "a+");
	fwrite($file,$resultat);
	fclose($file);
	?>
	
	<div id="Titre">
		<p>Votre film à bien été ajouté !</p>
	</div>
	
	<table>
		<tr><td>Film</td><td>Année</td><td>Producteur</td></tr>
	<?php
		echo "<tr><td>$_GET[nom]</td><td>$_GET[annee]</td><td>$_GET[prod]</td></tr>";
	?>
	</table>
    
 
    <center><a href="vod.html"><img id="acceuil" src="images/accueil.png" width="70px" title="E.T Telephone Maison"></a></center>
    
    
    
    
    
    
    </body>
