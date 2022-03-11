<div class="bloc1">
    <h2 style="color:red">BONJOUR</h2>
			<p><?php echo $_SESSION['pseudo']; ?></p>
			<p>
		<?php	
			if (isset($_SESSION['photo']))
			{			
             echo '<img src="'.$_SESSION['photo'].'" alt="#"   style="width:150px; height:100px; border-radius: 30% ;" />' ;
			}
        ?>
    <h3>VOS ACHATS SUR NOTRE SITE</h3>
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
			<h4><a  href="achat_materiels_bis_detail_conect.php">voir détails</a></h4>
</div>