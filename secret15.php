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

$article=$_GET['id'];
$bdd->exec("DELETE FROM panier WHERE panier.id ='$article'");
header('Location: achat_materiels_bis_conect.php');

?>