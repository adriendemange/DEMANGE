<!DOCTYPE HTML>
<html>
<body>

					<!--titre de la section-->
				<div>
					<h1>Informations de la classe <?php echo $_GET['numClasse'] ; ?>.</h1>
					
				</div>
				<!--tableau des détails de la classe-->
				<table class='table w-auto m-auto'>
					<tr>
						<th class='text-end'>Num</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["numClasse"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Filière</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["filiere"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Spécialité</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["specialite"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Niveau</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["niveau"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Capacité</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["capacite"]; ?></td>
					</tr>
					<tr>
						<th class='text-end'>Date de création</th>
						<td><?php echo $lesClasses[$_GET['numClasse']]["dateCreation"]; ?></td>
					</tr>
				</table>
	</body>
</html>
