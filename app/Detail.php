<?php

require_once('./connexion.php');

$row=$_GET['code'];
$sql="SELECT * FROM employes WHERE ID=$row";
$result=$connect->query($sql);
$ligne=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Details.css">
	<meta charset="utf-8">
</head>
<body>
		<table class="content-table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Téléphone</th>
				<th>Email</th>
				<th>Pays d'origine</th>
				<th>Ville</th>
				<th>Adresse</th>
                <th></th>
                <th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				
				<td><?php echo($ligne['ID'])?></td>
				<td><?php echo($ligne['Nom'])?></td>
				<td><?php echo($ligne['Prenom'])?></td>
				<td><?php echo($ligne['Telephone'])?></td>
				<td><?php echo($ligne['Email'])?></td>
				<td><?php echo($ligne['Pays_origine'])?></td>
				<td><?php echo($ligne['Ville'])?></td>
				<td><?php echo($ligne['Adresse'])?></td>
				 <td class='change'><a class="dlt" href="modifier.php?code=<?php echo($ligne['ID'])?>">Modifier</a></td>
	            <td class='change'><a class="sup" href="Supprimer.php?code=<?php echo($ligne['ID'])?>">Supprimer</a></td>

	        </tr>
			
		</tbody>
	</table>
	<button><a href="index.php">Retour</a></button>
</body>
</html>			