<?php
	$classe1 = array("numClasse" 	=> "1", 
					"filiere" 		=> "BTS", 
					"specialite" 	=> "SIO SIR", 
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
	$eleve1 = array("numEleve"	=> "1", "nom" => "Demange", "prenom" => "Adrien", "classe" => "1", "date" => "22/05/2002", "sexe" => "M");
	$eleve2 = array("numEleve"	=> "2", "nom" => "Dupont", "prenom" => "Martin", "classe" => "1", "date" => "31/12/2004", "sexe" => "M");
	$eleve3 = array("numEleve"	=> "3", "nom" => "Nicolo", "prenom" => "Martinolio", "classe" => "2", "date" => "17/02/2025", "sexe" => "M");
	$lesEleves = array("1" => $eleve1, 
						"2" => $eleve2, "3" => $eleve3);		
?>