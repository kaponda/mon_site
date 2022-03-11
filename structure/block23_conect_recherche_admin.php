<div class="bloc">
<?php

 if(isset($_POST['requete']) && $_POST['requete'] != NULL) // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
{try
{
	$bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$requete = htmlspecialchars($_POST['requete']); // on crée une variable $requete pour faciliter l'écriture de la requête SQL, mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS, avec la fonction htmlspecialchars().
$req = $bdd->query("SELECT * FROM billets WHERE titre LIKE '%$requete%' ORDER BY id DESC"); // la requête, que vous devez maintenant comprendre ;)

while($donnees = $req->fetch()) // on fait un while pour afficher la liste des fonctions trouvées, ainsi que l'id qui permettra de faire le lien vers la page de la fonction
{
?>
    <h3>
         <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo ($donnees['date_creation']); ?></em>
    </h3>
    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br />
    <em><a href="blog_coment_conect_admin.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>

<?php
    }
$req->closeCursor();
}
else if(isset($_POST['requete']) || $_POST['requete']= NULL)
{
	echo "entrez vos critères de recherche" ;
}
?>

</div>