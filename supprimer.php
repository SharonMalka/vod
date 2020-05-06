<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>VOD-Supprimer</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/style.css" />
    </head>
    <body>
		<div id="Titre">
		<p>Supprimer un film</p>
		</div>
		
		<?php
		$lines = file("data/vod.csv");
		
		
		foreach($lines as $n => $line){
		$unfilm = explode(":", $line);
			if (strtoupper($unfilm[0]) == strtoupper($_GET["nom"])) {
				$resultat = true  ;
				$numligne = array_search($line,$lines);
				unset($lines[$numligne]) ;
				break;
			}
		}
		
		if ($resultat == true){
			
			echo "<center><p id='texte'>Le film \"".strtoupper($_GET['nom'])."\" à bien été supprimé.</p></center>" ;
			$file = fopen("data/vod.csv", "w+");
				foreach($lines as $n => $line){
				fwrite($file,$line);
				}
		
			fclose($file);
			
		}
		else {
			echo "<center><p id='texte'>Désolé, nous n'avons pas trouvé votre film.</p></center>" ;	
		}
		$lines = array_values($lines);
		?>
		
		
		
		

		
   
    
    
    <center><a href="vod.html"><img id="acceuil" src="images/accueil.png" width="70px" title="E.T Telephone Maison"></a></center>
    </body>
