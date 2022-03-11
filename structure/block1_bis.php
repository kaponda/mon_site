<div class="bloc1">
<h2>votre panier</h2>
<h4 style="color:blue">Choix informatique:</h4>
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
$req = $bdd->query('SELECT * FROM panier');
$total=0;

while ($donnees = $req->fetch())
        {
           if($donnees['categorie']=="informatique")
			  {
	          
			 echo '<p>'.$donnees['nom_materiel'].' '.$donnees['prix'].'€'.' '.$donnees['quantite'].'X'.' '.$donnees['s_total'].'€'. 
			  '<a href="secret15.php?id='.$donnees['id'].'">'.'</br>'.'supprimer'.' '.'?'.'</a>'.'</p>';
			 $total=$total+$donnees['s_total'];
			 
			  }
		}
		echo '<p style="color:red">'.'total_informatique'.':'.' '.$total.'€'.'</p>';
		$total_informatique=$total;
$req->closeCursor();
?>
<h4 style="color:blue" >Choix livres:</h4>
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
$req = $bdd->query('SELECT * FROM panier');
$total=0;
while ($donnees = $req->fetch())
        {
           if($donnees['categorie']=="livres")
			  {
			 	  
	         echo '<p>'.$donnees['nom_materiel'].' '.$donnees['prix'].'€'.' '.$donnees['quantite'].'X'.' '.$donnees['s_total'].'€'. 
			 '<a href="secret15.php?id='.$donnees['id'].'">'.'</br>'.'supprimer'.' '.'?'.'</a>'.'</p>';
			 $total=$total+$donnees['s_total'];
		     
			  }
		}
		echo '<p style="color:red">'.'total_livres'.':'.' '.$total.'€'.'</p>';
		$total_livres=$total;
$req->closeCursor();
?>
<h4 style="color:blue">Choix hi_fi:</h4>
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
$req = $bdd->query('SELECT * FROM panier');
$total=0;

while ($donnees = $req->fetch())
    {
		
           if($donnees['categorie']=="hi_fi")

			  {
?>			    
	         <p><?php echo $donnees['nom_materiel']?> <?php echo $donnees['prix']?>€ <?php echo $donnees['quantite']?>X <?php echo$donnees['s_total'] ?>€</br>
			 <a href="secret15.php?id=<?php echo $donnees['id']?>">supprimer ?</a></p>
			  
			  
<?php
               $total=$total+$donnees['s_total'];
			   
			  }
            
			  
	}
	          $total_hi_fi=$total;   
?>
            <p style="color:red">total_hi_fi: <?php echo $total;?>€</p>
			
<?php

$total_panier=($total_informatique+$total_livres+$total_hi_fi);
$req->closeCursor();
?>
<h3 style="color:red">TOTAL_PANIER : <?php echo $total_panier; ?>€</h3>
<h3><a href="secret13.php">Confirmer</a></h3>

</div>