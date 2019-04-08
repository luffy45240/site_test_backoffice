<?php
		
//paramètres de connexion avec PDO
$pdo_options[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;//afficher les erreurs
$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';//afficher les erreurs
$loginserveur = "root";
$serveur = "localhost";
$mdpserveur = "";
$dbname = "projetcnam";

//connexion serveur avec PDO (si BDD inexistante)
$con = new PDO('mysql:host='.$serveur.';dbname='.$dbname, $loginserveur , $mdpserveur, $pdo_options);
?>