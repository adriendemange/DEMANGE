<!DOCTYPE HTML>
<html>
<body>
<div>
	<h1>Liste des Elèves</h1>
</div>
<table class='table table-striped table-hover w-auto text-center m-auto'>
	<!--ligne des en-têtes de colonne du tableau-->
	<thead class='table-dark'>
		<tr class='align-center'>
			<th>Num</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Classe</th>
			<th>Date</th>
			<th>Sexe</th>
		</tr>
	</thead>
	<!--contenu du tableau (données)-->
	<?php foreach ($lesEleves as $eleve) { 
	?>
    <tr>
        <td> <?php echo $eleve["numEleve"]; ?></td>
        <td> <?php echo $eleve["nom"]; ?></td>
        <td> <?php echo $eleve["prenom"]; ?></td>
        <td> <?php echo $eleve["classe"]; ?></td>
    </tr>
	<?php 
		}
		if (!empty($_POST)) {
			
			echo $_POST['zone'];
		}		
	?>
	
</table>
	</body>
</html>
