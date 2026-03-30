<?php 

function bddNotesges () {
    // Paramètres de la connexion à la base de données
    $host = "localhost";        // Serveur de base de données
    $username = "root";         // Nom d'utilisateur
    $password = "";             // Mot de passe (souvent vide en local)
    $dbname = "notesges";       // Nom de la base de données

    // Connexion à la base de données
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Vérifier la connexion
    if (!$con) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }

    // Retourner la connexion
    return $con;
}
?>