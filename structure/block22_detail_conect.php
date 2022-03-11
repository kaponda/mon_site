<div class="bloc">	
            <a style="padding-left:10%;color:blue" href="informatique_conect.php">informatique</a>
            <a style="padding-left:20%;color:blue" href="livres_conect.php">livres</a>
			<a style="padding-left:30%;color:blue" href="hi-fi_conect.php">hi-fi</a><br/>
			<h3 style="text-align:center;">DETAILS DE VOS ACHATS:</h3>
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
$req = $bdd->query('SELECT * FROM achats_clients');
$total=0;

while ($donnees = $req->fetch())
        {
           if($donnees['categorie']=="informatique" AND $donnees['um_id']==$_SESSION['id'])
			  {
	          
			 echo '<p>'.$donnees['nom_materiel'].' '.$donnees['prix'].'€'.' '.$donnees['quantite'].'X'.' '.$donnees['s_total'].'€'.' '.'le'.' '.$donnees['jour'] .'</p>';
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
$req = $bdd->query('SELECT * FROM achats_clients');
$total=0;
while ($donnees = $req->fetch())
        {
           if($donnees['categorie']=="livres" AND $donnees['um_id']==$_SESSION['id'])
			  {
			 	  
	         echo '<p>'.$donnees['nom_materiel'].' '.$donnees['prix'].'€'.' '.$donnees['quantite'].'X'.' '.$donnees['s_total'].'€'.' '.'le'.' '.$donnees['jour'] . '</p>';
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
$req = $bdd->query('SELECT * FROM achats_clients');
$total=0;

while ($donnees = $req->fetch())
    {
		
           if($donnees['categorie']=="hi_fi" AND $donnees['um_id']==$_SESSION['id'])

			  {
?>			    
	         <p><?php echo $donnees['nom_materiel']?> <?php echo $donnees['prix']?>€ <?php echo $donnees['quantite']?>X <?php echo$donnees['s_total'] ?>€   le  <?php echo$donnees['jour'] ?></p>
			  
			  
<?php
               $total=$total+$donnees['s_total'];
			   
			  }
            
			  
	}
	          $total_hi_fi=$total;   
?>
            <p style="color:red">total_hi_fi:<?php echo $total;?>€</p>
			
<?php

$total_panier=($total_informatique+$total_livres+$total_hi_fi);
$req->closeCursor();
?>
<h3 style="color:red">TOTAL_ACHATS :<?php echo $total_panier; ?>€</h3>
	</div>