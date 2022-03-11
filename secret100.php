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


$req = $bdd->prepare('INSERT INTO panier (um_id, jour, categorie, nom_materiel, prix, quantite, s_total) VALUES(:um_id, :jour, :categorie, :nom_materiel, :prix, :quantite, :s_total)')  ;
$req->execute(array(
    'um_id' => $_POST['um_id'],
	'jour' => $_POST['jour'],
    'categorie'=> $_POST['categorie'],
	'nom_materiel' => $_POST['nom_materiel'],
	'prix' => $_POST['prix'],
	'quantite' => $_POST['quantite'],
	's_total' => ($_POST['quantite']*$_POST['prix'])
	));

$req->closecursor();
	//Redirection du visiteur vers la page du minichat
header('Location: achat_materiels_bis_conect.php');
?>



