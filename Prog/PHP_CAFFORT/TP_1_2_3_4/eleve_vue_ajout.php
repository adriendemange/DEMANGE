<?php
if (!empty($_POST['nom']) && !empty($_POST['mot_de_passe'])) {
    echo "Connexion réussie. <br>Bonjour ". $_POST['nom'] . " ! <br> Vous pouvez maintenant naviguer sur le site.";
    
} else {
    $error = "Tous les champs sont obligatoires.";
    require "utilisateur_vue_connexion.php";
    exit;
}
return false;
?>