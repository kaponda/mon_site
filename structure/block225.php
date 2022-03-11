<div class="bloc">
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
$req = $bdd->query('SELECT id, nom_materiel, prix FROM hi_fi');

while ($donnees = $req->fetch())
{
?>

    <h3>
        <p><?php echo htmlspecialchars($donnees['nom_materiel']); ?></p>
        <p style="color:red"><em><?php echo $donnees['prix']; ?></em></p>
		<br/><br/>
    </h3>
    
    <p>

<?php
} // Fin de la boucle
$req->closeCursor();
?>
</div>