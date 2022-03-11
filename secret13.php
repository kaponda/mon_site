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
$bdd->exec('INSERT INTO achats_clients SELECT * FROM panier');
$bdd->exec("DELETE  FROM panier");
header('Location: achat_materiels_bis_conect.php');
?>
