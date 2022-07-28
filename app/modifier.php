<?php

require_once('./connexion.php');

$row=$_GET['code'];
$sql="SELECT * FROM employes WHERE (ID=$row)";
$result=$connect->query($sql);

$ligne=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier employé</title>
	<link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
	<div class="form">

    <form method="POST" action="Update.php"  enctype="multipart/form-data">
        <td><input type="hidden" name="code" class="champs" value="<?php echo($ligne['ID'])?>" required></td>
        <table class="content-table">
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" class="champs" value="<?php echo($ligne['Nom'])?>" required></td>
            </tr>
            <tr>
                 <td>Prénom</td>
                <td><input type="text" name="prenom" class="champs" value="<?php echo($ligne['Prenom'])?>" required></td>
            </tr>
            <tr>
                 <td>Téléphone</td>
                <td><input type="text" name="telephone" class="champs" value="<?php echo($ligne['Telephone'])?>" required></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email" class="champs" value="<?php echo($ligne['Email'])?>" required></td>
            </tr>
            <tr>
                <td>Pays d'origine</td>
                <td><input type="text" name="pays" class="champs" value="<?php echo($ligne['Pays_origine'])?>" required></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><input type="text" name="ville" class="champs" value="<?php echo($ligne['Ville'])?>" required></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><input type="text" name="adresse" class="champs" value="<?php echo($ligne['Adresse'])?>" required></td>
            </tr>
            
        </table><br>
        <input type="submit" class="bouton" value="Enregistrer">
    </form>
       <a href="index.php" >Retourner à l'accueil</a>
    </div>
</body>
</html>