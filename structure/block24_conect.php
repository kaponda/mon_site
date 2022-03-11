
<div class="bloc">
<h2>mini-chat</h2>
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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong style="color:blue">' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
<h2> ajouter un message</h2>
    <form action="secret6.php" method="post">
        
        <label for="pseudo"> Pseudo:</label><br/>     
		<input type="text" name="pseudo" id="pseudo" /><br /> 
        <label for="message">Message :</label><br/>   
		<input type="text" name="message" id="message" /><br /> 
        <input type="submit" value="Envoyer" />
	   
    </form>
</div>