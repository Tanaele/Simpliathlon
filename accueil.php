<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simpliathlon</title>
        <link rel="stylesheet" type="text/css" href="style_accueil.css">
    </head>
 
    <body>

    <?php include("_entete_deco.php"); ?>
    
    <!-- Corps de la page -->
    <div id="corps">
        <h1>Accueil</h1>
        
        <h2>Simpliathlon, un triathlon organisé top chrono !</h2>
		
		<form method="post" action="traitement.php">
 
			<div id="fenetre_connexion">
				<fieldset id="connexion">
				<legend>Connexion</legend>
					<label for="email">Votre e-mail : </label>
					<input type="email" name="email" id="email" /><br/>
					<label for="mdp">Votre mot de passe : </label>
					<input type="password" name="mdp" id="mdp"/><br/>
					<input type="button" value="Connexion"/>
			</fieldset>
		</div>
		</form>
		
		<div id="message_mdp_oublie"><p><a href="mdp_oublie.php">Mot de passe oublié ?</a></p>
		</div>
    </div>
    
    <!-- Pied de page -->
    <?php include("_pied_de_page.php"); ?>
    
    </body>
</html>