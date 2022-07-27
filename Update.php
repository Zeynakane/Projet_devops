<?php

// Tentative de connexion

require_once('./connexion.php');

// Récupération des valeurs
$id=$_POST['code']; 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['telephone'];
$email=$_POST['email'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$adresse=$_POST['adresse'];

// Exécution de la requête

$sql="UPDATE employes SET Nom='$nom',Prenom='$prenom',Telephone='$tel',Email='$email',Pays_origine='$pays',Ville='$ville',Adresse='$adresse' WHERE ID=$id ";
$result=$connect->query($sql);


// Affichage de la requête

header("location:index.php#Affichage");