<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>inscription.html</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="testgeek.css" rel="stylesheet" type="text/css" />    		
	</head>
	<body>
		<div id="reponse">
			<p>
		<?php  	
			// On declare une constante pour le nombre de question
		
			// La fonction verification() permet de savoir si l'utilisateur à bien répondu a toutes les questions, elle renvoi true ou false
			
			
			
			// La fonction points() permet de calculer le nombre de points obtenus, elle renvoi un nombre
			
			
			
			// On appel la fonction verification() et si c'est ok on calcul les points avec la fonction points()
			
				// Si le score est de 30, on est un vrai geek
				echo "T'es un(e) vrai geek!!! Même le capitaine Kirk t'envie à mort... tu es plus fort que Chuck Norris (ou pas) mais c'est dommage que tu ne sois attiré(e) que par Nyan Cat!";

					// Sinon si le score est entre 20 et 29, on est pas un vrai geek mais un gamer ou un noob
					echo "Tu n'es pas un vrai geek, mais plutôt un gamer ou un noob ;-) Quoiqu'il en soit il faut encore que tu travail tes réponses avant de prétendre être un geek!";
					
						// Sinon si le score est entre 10 et 19, on est très loin d'être un vrai geek
						echo "Tu es loin d'être un vrai geek! Là j'imagine que tu te dis 'ouf sauvé!', mais en réalité je suis sur que les gobelins te manque inconsciemment...";
						
							// Sinon si le score est entre 1 et 9, on est a des années lumière d'être un vrai geek
							echo "Tu es a des années lumière d'un vrai geek! A mon avis tu es quelqu'un de bien malgré ton esprit mal tourné ;-) Allez recommence et fait un effort!";
							
								// Sinon le score est de 0, on est pas un geek mais un type qui ne connait rien à rien
								echo "A défaut d'être un geek tu es équivalent à la valeur null ou nil... Malgré tout tu pourrais peut-être te recycler dans le commerce de savons?";
							
							
			// Sinon c'est que c'est pas OK, il faut afficher un message à l'utilisateur pour lui dire de bien tout remplir
			echo "Tu n'as pas rempli toute les cases!";	
			
		?>		
			</p>
			<form method="post" action="testgeek.html">
				<input id="boutonRetour" type="submit" value="Retour" class="mesBoutons"/>
			</form>
		</div>
	</body>
</html>