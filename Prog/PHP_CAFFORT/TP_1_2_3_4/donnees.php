<?php
	$classe1 = array("numClasse" 	=> "1", 
					"filiere" 		=> "BTS", 
					"specialite" 	=> "SIO", 
					"niveau"		=> 1, 
					"capacite"		=> 24, 
					"dateCreation"	=> "2024-09-01");
	$classe2 = array("numClasse" 	=> "2", 
					"filiere" 		=> "BTS", 
					"specialite" 	=> "CIEL", 
					"niveau"		=> 1, 
					"capacite"		=> 20, 
					"dateCreation"	=> "2024-09-02");
	$lesClasses = array("1" => $classe1, 
						"2" => $classe2);
						
	$eleve1 = array("numEleve"	=> "1", "nom" => "Demange", "prenom" => "Adrien", "classe" => "1");
	$eleve2 = array("numEleve"	=> "2", "nom" => "Dupont", "prenom" => "Martin", "classe" => "1");
	$eleve3 = array("numEleve"	=> "3", "nom" => "Nicolo", "prenom" => "Martinolio", "classe" => "2");
	$lesEleves = array("1" => $eleve1, 
						"2" => $eleve2, "3" => $eleve3);
	if (!empty($_POST)) {
		echo "Le formulaire a été soumis avec des données.";
		include "eleve_vue_liste.php";
	}		
	if (isset($_GET['page'])) {
		switch ($_GET['page']) {
			case "eleves" :
				include "eleve_vue_liste.php" ; 
				break;
			default : 
				include "classe_vue_detail.php";
				break;
		}
	}

?>