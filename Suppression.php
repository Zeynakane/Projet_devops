<?php

require_once('./connexion.php');
$sql="DELETE FROM employes ";
$result=$cnx->query($sql);
header("location:index.php#Affichage");