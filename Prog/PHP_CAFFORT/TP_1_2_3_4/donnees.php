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
	include "classe_vue_detail.php";
?>