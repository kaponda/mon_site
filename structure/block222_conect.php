<div class="bloc">
<a style="padding-left:10%;color:blue" href="informatique_conect.php">informatique</a>
            <a style="padding-left:20%;color:blue" href="livres_conect.php">livres</a>
			<a style="padding-left:30%;color:blue" href="hi-fi_conect.php">hi-fi</a><br/>
			<h1 style="text-align:center;"> LIVRES</h1>
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

// On récupère 
$req = $bdd->query('SELECT id, nom_materiel, prix, image FROM livres');

while ($donnees = $req->fetch())
{
?>

    <h3 style="background-color:silver;" >
        <p><?php echo htmlspecialchars($donnees['nom_materiel']); ?></p>    
		<p><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $donnees['image'] ).'"/>';  ?> </p>
        <p style="color:red"> <em> <?php echo $donnees['prix'].' '.'€'; ?> </em>
		<a style="colo:blue" href="achat_materiels2_bis_conect.php?categorie=livres&amp;id=<?php echo $donnees['id'];?>&amp;nom_materiel=<?php echo $donnees['nom_materiel'];?>&amp;prix=<?php echo $donnees['prix'];?>">acheter </a> </p>
		
		<br/><br/>
    </h3>
    
    <p>

<?php
} // Fin de la boucle 
$req->closeCursor();
?>
</div>