<?php
if (!empty($_POST['nom']) && !empty($_POST['mot_de_passe'])) {
    // Affichage de la confirmation de la connexion
    echo "Connexion réussie. <br>Bonjour " . $_POST['nom'] . " ! <br> Vous pouvez maintenant naviguer sur le site.";
?>
    <!-- Formulaire d'ajout d'élève -->
    <form method="POST" action="donnees.php">
        <input type="text" name="zone">Nom à rentrer : </br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>

        <label for="classe">Classe :</label>
        <select id="classe" name="classe" required>
            <option value="BTS SIO SISR 1">BTS SIO SISR 1</option>
            <option value="BTS SIO SLAM 1">BTS SIO SLAM 1</option>
            <option value="BTS CIEL 1">BTS CIEL 1</option>
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
