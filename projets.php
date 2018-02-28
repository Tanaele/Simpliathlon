<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simpliathlon</title>
        <link rel="stylesheet" type="text/css" href="style_projets.css">
    </head>
 
    <body>

    <?php include("entete.php"); ?>
	
    <!-- Corps de la page -->
    <div id="corps">
        <h1>Projets en cours</h1>
        <!--<h2>Simpliathlon, un triathlon organisé top chrono !</h2>-->
		<form method="post" action="traitement.php">
			<fieldset id="projets">
					<table id = "table_projets">
						<thead>
							<tr>
								<th>N°</th>
								<th>Nom</th>
								<th>Type</th>
								<th>Lieu</th>
								<th>Date</th>
								<th>Liste</th>
								<th>Agenda</th>
								<th>Supprimer</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Exemple</td>
								<td>Sprint</td>
								<td>Blagnac</td>
								<td>04/08/2019</td>
								<td>Editer</td>
								<td>Editer</td>
								<td>Supprimer</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Exemple2</td>
								<td>Half</td>
								<td>Toulouse</td>
								<td>05/08/2019</td>
								<td>Editer</td>
								<td>Editer</td>
								<td>Supprimer</td>
							</tr>
						</tbody>
					</table>
			</fieldset>
		</form>
    </div>
    
    <!-- Pied de page -->
    <?php include("pied_de_page.php"); ?>
    
    </body>
</html>