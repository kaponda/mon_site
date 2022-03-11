<?php
	session_start();
	$_SESSION['nom_materiel']=$_POST['nom_materiel'];
	$_SESSION['prix']=$_POST['prix'];
?>
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO livres (nom_materiel, prix) VALUES(?,?)');
$req->execute(array($_POST['nom_materiel'], $_POST['prix']));

// Redirection du visiteur vers la page du minichat
header('Location: achat_materiel_bis_conect.php');
?>