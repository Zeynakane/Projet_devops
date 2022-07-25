<?php

define('SERVER', 'localhost');
	define('USER', 'root');
	define('PASSWORD','' );
	define('DBNAME', 'employes');

	// Tentative de connexion

	$cnx=new mysqli(SERVER,USER,PASSWORD,DBNAME);
	// if ($cnx->connect_error) {
		
	// 	die('<br>Erreur de conexion au serveur de données'.$cnx->connect_error);

	// }
	// echo '<br>connexion au serveur de données';
	// echo '<br';