<!doctype html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>Liste des élèves</title>
		<!--utilisation de la feuille de style bootstrap-->
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
	</head>
	<body>
		<!--Menu-->
		<nav class='navbar navbar-expand-lg bg-primary'>
			<ul class='navbar-nav mr-auto text-center mx-auto'>
				<!--Items du menu-->
				<li class='nav-item text-white'>
					<h4><a class='nav-link text-white' href='#'>Classes</a></h4>
				</li>
			</ul>
		</nav>
		<!--Corps de la page-->
		<div class='text-center'>
			<br>
			<?php require("accueil.php"); ?>
			<br>
		</div>
		<!--Pied de page-->
		<footer class='text-center bg-primary text-white'>
			<strong>BTS SIO 2024-2025</strong>
		</footer>
	</body>
</html>