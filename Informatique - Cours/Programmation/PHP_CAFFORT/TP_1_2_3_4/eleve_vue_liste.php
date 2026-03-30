<!DOCTYPE HTML>
<html>
<body>
<div>
	<h1>Liste des Elèves</h1>
	<!-- Lien "Ajouter" qui renvoie vers la page formulaire -->
	<a href="index.php?utilisateurConnexion">Ajouter un élève</a>
</div>
<table class='table table-striped table-hover w-auto text-center m-auto'>
	<!--ligne des en-têtes de colonne du tableau-->
	<thead class='table-dark'>
		<tr class='align-center'>
			<th>Num</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Classe</th>
			<th>Date</th>
			<th>Sexe</th>
		</tr>
	</thead>
	<!--contenu du tableau (données)-->
		<?php	
		$con = bddNotesges();
		if (!empty($_POST)) { 
		/*
			foreach ($lesEleves as $eleve) {    //incrémenter numéro de l'élève
				$num_dernier_eleve = $eleve['numEleve'];
			}
			$nouvelEleve = [
			"numEleve" => ($num_dernier_eleve + 1 ), 
			"nom" => $_POST['nom'], 
			"prenom" => $_POST['prenom'], 
			"classe" => $_POST['classe'], //numéro de la classe transmis grâce au value 
			"date" => $_POST['date_naissance'],
			"sexe" => $_POST['sexe']];
			//echo $_POST['classe'];
			$lesEleves[] = $nouvelEleve; // Ajouter le nouvel élève à la fin du tableau des élèves	
			
			*/
			
			// $idUt = $_POST['id'];
			$mdpUt = $_POST['mdp'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$classe = $_POST['classe'];
			$date_naissance = $_POST['date_naissance'];
			$sexe = $_POST['sexe'];
			$idUt = strtolower(substr($prenom, 0, 1)) . '.' . strtolower(substr($nom, 0, 6));
				$req = "INSERT INTO utilisateur (loginUt, mdpUt, nomUt, prenomUt, idSection, ddnUt, sexeUt) 
				VALUES ('$idUt', '$mdpUt', '$nom', '$prenom', '$classe', '$date_naissance', '$sexe')";
				$res = mysqli_query($con, $req);
				if ($res) {
					// Afficher un message de confirmation si l'élève a été ajouté
					header('Location: index.php?page=connexion&message=success');
				} else {
					// Afficher un message d'erreur si l'ajout échoue
					echo "<br> Erreur : " . mysqli_error($con);
				}

					
				
		}

			//$req2 = "SELECT idUt, nomUt, prenomUt, idSection, ddnUt, sexeUt FROM utilisateur";
			$req2 = "
				SELECT 
					u.idUt, u.nomUt, u.prenomUt, u.idSection, u.ddnUt, u.sexeUt, 
					s.nomFormation, s.nomFiliere, s.numNiveau, s.nomSpecialite 
				FROM utilisateur u
				INNER JOIN section s ON u.idSection = s.idSection
			";
			$res2 = mysqli_query($con, $req2);
			$resultats = mysqli_fetch_all($res2, MYSQLI_ASSOC); 
			/*foreach ($resultats as $uneLigne) {
				echo "</tr>";
				foreach ($uneLigne as $uneCellule) { 
					
						echo "<td>" . $uneCellule . "</td>"; // Affichage de chaque cellule		
				}
				 echo "</tr>"; // Fin de la ligne pour cet utilisateur
			}*/
			foreach ($resultats as $uneLigne) {
				echo "<tr>";  // Début de la ligne du tableau
				echo "<td>" . $uneLigne['idUt'] . "</td>";  // Affichage de l'ID de l'élève
				echo "<td>" . $uneLigne['nomUt'] . "</td>";  // Affichage du nom de l'élève
				echo "<td>" . $uneLigne['prenomUt'] . "</td>";  // Affichage du prénom de l'élève
				// Affichage du nom complet de la classe
				echo "<td>" . $uneLigne['nomFormation'] . " " . $uneLigne['nomFiliere'] . " " . $uneLigne['numNiveau'] . " - " . $uneLigne['nomSpecialite'] . "</td>";
				echo "<td>" . $uneLigne['ddnUt'] . "</td>";  // Affichage de la date de naissance
				echo "<td>" . $uneLigne['sexeUt'] . "</td>";  // Affichage du sexe
				echo "</tr>";  // Fin de la ligne pour cet utilisateur
}
			mysqli_close($con);	
			
			?>
		
</table>
	</body>
</html>