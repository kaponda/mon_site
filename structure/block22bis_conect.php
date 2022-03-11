<?php
$date = date('y-m-d H:i:s');
?> 
<div class="bloc">	
            <a style="padding-left:10%;color:blue" href="informatique_conect_bis.php">informatique</a>
            <a style="padding-left:20%;color:blue" href="livres_conect_bis.php">livres</a>
			<a style="padding-left:30%;color:blue" href="hi-fi_conect_bis.php">hi-fi</a><br/>
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
  if($_GET['categorie']=='informatique')
	 {
		   $req= $bdd->prepare('SELECT id, nom_materiel, prix, image FROM informatique WHERE id=?');
		   $req->execute(array($_GET['id']));
	   
	   while ($donnees = $req->fetch())
        {
?>   

<h3>
        <p><?php echo htmlspecialchars($donnees['nom_materiel']); ?> </p>
		<?php	echo '<img src="data:image/jpeg;base64,'.base64_encode( $donnees['image'] ).'"/>'; ?>
        <p style="color:red"> <em> <?php echo $donnees['prix'].' '.'€'; ?></em> </p>
</h3>
<?php
        } // Fin de la boucle
     }
  else if($_GET['categorie']=='livres')
	 {
		   $req= $bdd->prepare('SELECT id, nom_materiel, prix, image FROM livres WHERE id=?');
		   $req->execute(array($_GET['id']));
	   
	   while ($donnees = $req->fetch())
        {
?>   

<h3>
        <p><?php echo htmlspecialchars($donnees['nom_materiel']); ?> </p>
		<?php	echo '<img src="data:image/jpeg;base64,'.base64_encode( $donnees['image'] ).'"/>'; ?>
        <p style="color:red"> <em> <?php echo $donnees['prix'].' '.'€'; ?></em> </p>
</h3>
<?php
        } // Fin de la boucle
     }
   else if($_GET['categorie']=='hi_fi')
	 {
		   $req= $bdd->prepare('SELECT id, nom_materiel, prix, image FROM hi_fi WHERE id=?');
		   $req->execute(array($_GET['id']));
	   
	   while ($donnees = $req->fetch())
        {
?>   

<h3>
        <p><?php echo htmlspecialchars($donnees['nom_materiel']); ?> </p>
		<?php	echo '<img src="data:image/jpeg;base64,'.base64_encode( $donnees['image'] ).'"/>'; ?>
        <p style="color:red"> <em> <?php echo $donnees['prix'].' '.'€'; ?></em> </p>
</h3>
<?php
        } // Fin de la boucle
     }	 
$req->closeCursor();
	 
?>
       <form action="secret10.php" method="post">
             <input type="hidden" name="um_id" value=<?php echo $_SESSION['id']; ?> />
		     <input type="hidden" name="jour" value=<?php echo $date; ?> />			 
		     <input type="hidden" name="categorie" value=<?php echo $_GET['categorie']; ?> />
			 <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> />
		     <input type="hidden" name="nom_materiel" value="<?php echo ($_GET['nom_materiel']); ?>" />
		     <input type="hidden" name="prix" value=<?php echo $_GET['prix']; ?> />
          <p>
          <label for="quantite">quantité</label> :  <input type="number" name="quantite" id="quantite" /><br />
		  </p>
		  <p>
          <input type="submit" value="valider" />
	      </p>
       </form>
	
		
</div>