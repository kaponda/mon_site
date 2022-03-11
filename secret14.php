<?php
session_start();
?>
<?php

//Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$bdd->exec("DELETE  FROM panier");
?>
<?php
$_SESSION = array();
session_destroy();
session_unset();
header('Location: accueil.php');

?>

