<!DOCTYPE HTML>
<html>
<body>

					<!--titre de la section-->
				<div>
					<h1>Informations de la classe <?php echo $_GET['numClasse'] ; ?>.</h1>
					
				</div>
				<!--tableau des détails de la classe-->
				<table class='table w-auto m-auto'>
					<tr>
						<th class='text-end'>Num</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["numClasse"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Filière</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["filiere"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Spécialité</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["specialite"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Niveau</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["niveau"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Capacité</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["capacite"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Date de création</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["dateCreation"]  ;?></td>
					</tr>
					<tr>
						<th class='text-end'>Liste des élèves de la classe :</th>
						<?php
							// Nouveau tableau pour stocker les élèves trouvés
							$elevesTrouves = array();

							// Parcours du tableau des élèves pour vérifier la correspondance de la classe
							foreach ($lesEleves as $eleve) {
								if ($eleve['classe'] === $_GET['numClasse']) {
									// Si la classe de l'élève correspond à la classe recherchée, ajoute cet élève dans le tableau $elevesTrouves
									$elevesTrouves[] = $eleve;
								}
							}

							// Affichage des élèves trouvés
							 foreach ($elevesTrouves as $eleve) {
								echo "<tr><td>" . $eleve['nom'] . " " . $eleve['prenom'] . "</td></tr>";
							}
							?>
					</tr>
					
				</table>
	</body>
</html>
