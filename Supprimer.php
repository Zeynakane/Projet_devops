<?php
 
require_once('./connexion.php');
$row=$_GET['code'];
$sql="DELETE FROM employes WHERE (ID=$row) ";
$result=$connect->query($sql);
header("location:index.php#Affichage");
