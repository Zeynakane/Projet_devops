
<?php
 
 require_once ('./connexion.php');




$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['telephone'];
$email=$_POST['email'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$adresse=$_POST['adresse'];

$sql= "INSERT INTO employes (Nom, Prenom, Telephone, Email,Pays_origine,Ville,Adresse) VALUES ('$nom', '$prenom', '$tel', '$email','$pays','$ville','$adresse')";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="inserer.css">
	<meta charset="utf-8">
</head>
<body>

    <div class="centre">

    	<?php 

    	if(mysqli_query($connect,$sql)) {
    		echo "<p>Insertion réussie<br>retouner à la page d'accueil</p>
        		<button><a href='index.php#Affichage'>Accueil</a></button>";
		}  else 
		{
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		 mysqli_close($connect);?>
    
        <!-- <p> Retouner à la page d'accueil</p>
        <button><a href="Afficher.php">Accueil</a></button> -->
    </div>

</body>
</html>


