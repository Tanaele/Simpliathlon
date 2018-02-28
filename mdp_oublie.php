<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simpliathlon</title>
        <link rel="stylesheet" type="text/css" href="style_mdp_oublie.css">
    </head>
    <body>
    <?php include("entete_deco.php"); ?>


    <!-- Corps de la page -->
    <div id="corps">
        <h2>Réinitialisation du mot de passe</h2>
		<!--<label for="mdp_oublie">Veuillez entrer votre e-mail pour recevoir un mail avec un lien de réinitialisation de votre mot de passe : </label><br/>
		<input type="email" name="email" id="email" />-->
            <form method="post" action="traitement.php">
                <div id="fenetre_envoi_lien">
                    <fieldset id="envoi_lien">
                        <label for="email">Veuillez entrer votre e-mail pour recevoir un mail avec un lien de réinitialisation de votre mot de passe :</label>
                        <input type="email" name="email" id="email" /><br/>
                        <input type="button" value="Envoyer" id = "envoyer_button"/>
                    </fieldset>
                </div>
            </form>
    </div>
    <!-- Pied de page -->
    <?php include("pied_de_page.php"); ?>
    </body>
</html>