<?php
$_SESSION['pseudo']=$_GET['pseudo'];
$_SESSION['commentaire']=$_GET['commentaire'];

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
$req = $bdd->prepare('INSERT INTO coment (id_billet, pseudo, commentaire) VALUES(?,?,?)');
$req->execute(array($_GET['id_billet'], $_GET['pseudo'], $_GET['commentaire']));

// Redirection du visiteur vers la page du minichat
header('Location:blog_coment_conect_admin.php?billet='.$_GET['id_billet']);
?>