<!--titre de la section-->
<div>
	<h1>Liste des Classes</h1>
</div>
<!--importation des données des classes-->
<?php require("donnees.php"); ?>
<table class='table table-striped table-hover w-auto text-center m-auto'>
	<!--ligne des en-têtes de colonne du tableau-->
	<thead class='table-dark'>
		<tr class='align-center'>
			<th>Num</th>
			<th>Filière</th>
			<th>Spécialité</th>
			<th>Niveau</th>
			<th>Détails</th>
		</tr>
	</thead>
	<!--contenu du tableau (données)-->
	<?php
		foreach($lesClasses as $uneClasse){
			echo"
			<tr>
				<td>".$uneClasse["numClasse"]."</td>
				<td>".$uneClasse["filiere"]."</td>
				<td>".$uneClasse["specialite"]."</td>
				<td>".$uneClasse["niveau"]."</td>
				<td></td>
			</tr>";
		}
	?>
</table>