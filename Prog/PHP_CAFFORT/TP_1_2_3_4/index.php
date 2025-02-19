<!doctype html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>Liste des élèves</title>
		<!-- Utilisation de la feuille de style Bootstrap -->
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
	</head>
	<body>
		<!-- Menu -->
		<nav class='navbar navbar-expand-lg bg-primary'>
			<ul class='navbar-nav mr-auto text-center mx-auto'>
				<!-- Items du menu -->
				<li class='nav-item text-white'>
					<h4><a class='nav-link text-white' href='index.php?page=classes'>Classes</a></h4>
				</li>
				<li class='nav-item text-white'>
					<h4><a class='nav-link text-white' href='index.php?page=eleves'>Elèves</a></h4>
				</li>
				<li class='nav-item text-white'>
					<h4><a class='nav-link text-white' href='index.php?page=utilisateurConnexion'>Connexion</a></h4>
				</li>
			</ul>
		</nav>
        
		<!-- Corps de la page -->
		<div class='text-center'>
			<br>
			<?php 
				if (isset($_GET['page'])) {
					switch ($_GET['page']) {
						case 'classes':
							include "classe_vue_liste.php";
							break;
						case 'eleves':
							include "eleve_vue_liste.php"; 
							break;
						case 'utilisateurConnexion':
							include "utilisateur_vue_connexion.php"; 
							break;
						case "details";
							include "donnees.php"; 
							break;
						case "connexion";
							include "eleve_vue_ajout.php";
							break;

						/*default:
							include "eleve_vue_ajout.php"; 
							break;
							*/
						
					}
				}
				else {
					include "utilisateur_vue_connexion.php"; 
				}
			
			?>
			<br>
		</div>

		<footer class='text-center bg-primary text-white'>
			<strong>BTS SIO 2024-2025</strong>
		</footer>
	</body>
</html>
