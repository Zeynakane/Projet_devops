
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un employé</title>
    <link rel="stylesheet" type="text/css" href="formulaire.css">
    <meta charset="utf-8">
</head>
<body>
    <div class="form">
    <form method="POST" action="inserer.php"  enctype="multipart/form-data">
        <table class="content-table">
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" class="champs" required></td>
            </tr>
            <tr>
                 <td>Prénom</td>
                <td><input type="text" name="prenom" class="champs" required></td>
            </tr>
            <tr>
                 <td>Téléphone</td>
                <td><input type="text" name="telephone" class="champs" required></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email" class="champs" required></td>
            </tr>
            <tr>
                <td>Pays d'origine</td>
                <td><input type="text" name="pays" class="champs" required></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><input type="text" name="ville" class="champs" required></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><input type="text" name="adresse" class="champs" required></td>
            </tr>
            
        </table><br>
        <input type="submit" class="bouton" value="Ajouter">
    </form>
       <a href="index.php" >Retourner à l'accueil</a>
    </div>
    
</body>
</html>