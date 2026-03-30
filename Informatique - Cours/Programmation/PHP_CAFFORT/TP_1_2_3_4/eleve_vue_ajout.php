<?php
	if (isset($_GET['message'])) {
    $message = $_GET['message'];
    if ($message == 'success') {
        echo "<p style='color: green;'>Élève ajouté avec succès !</p>";
    } elseif ($message == 'error') {
        echo "<p style='color: red;'>Erreur lors de l'ajout de l'élève.</p>";
    }
	}

if (!empty($_POST['nom']) && !empty($_POST['mot_de_passe'])) {
    // Affichage de la confirmation de la connexion
    echo "Connexion réussie. <br>Bonjour " . $_POST['nom'] . " ! <br> Vous pouvez maintenant naviguer sur le site.";
	
?>
    <!-- Formulaire d'ajout d'élève -->
	
    <form method="POST" action="index.php?page=eleves">
		
		<label for="prenom">Mot de passe :</label>
        <input type="text" name="mdp" required><br></br>
		
		<label for="prenom">Nom :</label>
        <input type="text" name="nom" required><br></br>
	
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>

       <label for="classe">Classe :</label>
	   <select id="classe" name="classe" required>
	   <?php	
	    $con = bddNotesges();
		$req = "SELECT idSection, nomFormation, numNiveau, nomFiliere, nomSpecialite FROM section";
		$res = mysqli_query($con, $req);
			$resultats = mysqli_fetch_all($res, MYSQLI_ASSOC); 
			foreach ($resultats as $uneLigne) {
				$idSection = $uneLigne['idSection'];
				echo "<option value='$idSection'>" . $uneLigne['nomFormation'] . " " . $uneLigne['nomFiliere']. " "   . $uneLigne['numNiveau'] . " ". $uneLigne['nomSpecialite']. "</option>";
				//echo "</tr>";
			}
		mysqli_close($con);	
		?>
        </select><br><br>
        <label for="sexe">Sexe :</label>
        <input type="radio" id="masculin" name="sexe" value="M" required>
        <label for="masculin">Masculin</label>
        <input type="radio" id="feminin" name="sexe" value="F" required>
        <label for="feminin">Féminin</label><br><br>
        <input type="submit" value="Ajouter l'élève">
    </form>
<?php
} else {
    // Si le formulaire n'est pas correctement rempli, afficher un message d'erreur
    $error = "Tous les champs sont obligatoires.";
    require "utilisateur_vue_connexion.php";
    exit;
}
?>
