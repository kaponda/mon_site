<?php
$_SESSION['id_billet']=$_POST['id_billet'];
$_SESSION['auteur']=$_POST['auteur'];
$_SESSION['commentaire']=$_POST['commentaire'];
$_SESSION['date_commentaire']=$_POST['date_commentaire'];
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
$req = $bdd->prepare('INSERT INTO commentaires (id_billet,auteur,commentaire,date_commentaire) VALUES(?,?,?,?)');
$req->execute(array($_POST['id_billet'],$_POST['auteur'], $_POST['commentaire'],$_POST['date_commentaire']));
header('Location: blog_coment_conect.php?billet');
// Redirection du visiteur vers la page du minichat

?>