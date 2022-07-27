<?php

require_once('./connexion.php');
$sql="DELETE FROM employes ";
$result=$connect->query($sql);
header("location:index.php#Affichage");