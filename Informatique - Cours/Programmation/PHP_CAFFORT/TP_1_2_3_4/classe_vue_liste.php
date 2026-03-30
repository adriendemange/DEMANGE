<!--titre de la section-->
<div>
	<h1>Liste des Classes</h1>
</div>
<table class='table table-striped table-hover w-auto text-center m-auto'>
	<!--ligne des en-têtes de colonne du tableau-->
	<thead class='table-dark'>
		<tr class='align-center'>
			<th>Num</th>
			<th>Filière</th>
			<th>Spécialité</th>
			<th>Niveau</th>
			<td>Details</td>
		</tr>
	</thead>
	<!--contenu du tableau (données)-->
	<tr>
		<td>1</td>
		<td>BTS</td>
		<td>SIO</td>
		<td>1</td>
		<td><a href='index.php?page=details&numClasse=1'>Consulter ici</a></td>
	</tr>
	<tr>
	<tr>
		<td>2</td>
		<td>BTS</td>
		<td>CIEL</td>
		<td>1</td>
		<td><a href='index.php?page=details&numClasse=2'>Consulter ici</a></td>
	</tr>
	<?php 
				if (isset($_GET['page'])) {
					switch ($_GET['page']) {
						case 'details':
							include "classe_vue_detail.php";						
							break;
						/*default:
							require "utilisateur_vue_connexion.php"; 
							break;
							*/
					}
				}
	?>
</table>