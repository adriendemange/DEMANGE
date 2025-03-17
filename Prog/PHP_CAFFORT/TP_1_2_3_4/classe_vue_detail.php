<!DOCTYPE HTML>
<html>
<body>
<?php include "donnees.php" ?>
					<!--titre de la section-->
				<div>
					<h1>Informations de la classe <?php echo $_GET['numClasse'] ; ?>.</h1>
					<?php $con = bddNotesges();  ?>
					
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
							$numClasseURL = $_GET['numClasse'];
							$req = "SELECT nomUt, prenomUt FROM utilisateur WHERE idSection = $numClasseURL ";
							$res = mysqli_query($con, $req);
							$resultats = mysqli_fetch_all($res, MYSQLI_ASSOC); 
							foreach ($resultats as $uneLigne) {
								echo "</tr>";
								foreach ($uneLigne as $uneCellule) { 
										echo "<td>" . $uneCellule . "</td>"; // Affichage de chaque cellule		
								}
								 echo "</tr>"; // Fin de la ligne pour cet utilisateur
							}
								mysqli_close($con);	
							?>
					
					</tr>
				</table>
	</body>
</html>
