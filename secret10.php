<?php
	session_start();
		
?>
<?php
//if($_POST['categorie']=="informatique")

//Connexion à la base de données

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if($_POST['categorie']=="informatique")
 {
$req = $bdd->query('SELECT * FROM panier');
$total=0;

while ($donnees = $req->fetch())
        {
           if($donnees['categorie']=="informatique")
		   {
			   if($donnees['nom_materiel']==$_POST['nom_materiel'])
			   {
                 	$total=$total+$donnees['quantite'];
			   }
		   }
		}
		$req->closecursor();
		   if($total+$_POST['quantite'] > 10)
		   {
			   echo 'le nombre maximale par article est de 10'.'<a href="achat_materiels_bis_conect.php?id='.$donnees['id'].'">'.'</br>'.'retour'.'</a>';
		   }
		   else
		   {
			$req = $bdd->prepare('INSERT INTO panier (um_id, jour, categorie, nom_materiel, prix, quantite, s_total) VALUES(:um_id, :jour, :categorie, :nom_materiel, :prix, :quantite, :s_total)')  ;
$req->execute(array(
    'um_id' => $_POST['um_id'],
	'jour' => $_POST['jour'],
    'categorie'=> $_POST['categorie'],
	'nom_materiel' => $_POST['nom_materiel'],
	'prix' => $_POST['prix'],
	'quantite' => $_POST['quantite'],
	's_total' => ($_POST['quantite']*$_POST['prix'])
	));
	$req->closecursor();
	header('Location: achat_materiels_bis_conect.php');
           }	
}
else if($_POST['categorie']=="livres")
     {
//Connexion à la base de données

/*try
{
	$bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}*/
$req = $bdd->query('SELECT * FROM panier');
$total=0;

while ($donnees = $req->fetch())
        {
           if($donnees['categorie']=="livres")
		   {
			   if($donnees['nom_materiel']==$_POST['nom_materiel'])
			   {
                 	$total=$total+$donnees['quantite'];
			   }
		   }
		}
		$req->closecursor();
		   if($total+$_POST['quantite'] > 10)
		   {
			   echo 'le nombre maximale par article est de 10'.'<a href="achat_materiels_bis_conect.php?id='.$donnees['id'].'">'.'</br>'.'retour'.'</a>';
		   }
		   else
		   {
			   $req = $bdd->prepare('INSERT INTO panier (um_id, jour, categorie, nom_materiel, prix, quantite, s_total) VALUES(:um_id, :jour, :categorie, :nom_materiel, :prix, :quantite, :s_total)')  ;
$req->execute(array(
    'um_id' => $_POST['um_id'],
	'jour' => $_POST['jour'],
    'categorie'=> $_POST['categorie'],
	'nom_materiel' => $_POST['nom_materiel'],
	'prix' => $_POST['prix'],
	'quantite' => $_POST['quantite'],
	's_total' => ($_POST['quantite']*$_POST['prix'])
	));
	$req->closecursor();
	header('Location: achat_materiels_bis_conect.php');
           }	
	 }
	 else
	 {
//Connexion à la base de données

/*try
{
	$bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}*/
$req = $bdd->query('SELECT * FROM panier');
$total=0;

while ($donnees = $req->fetch())
        {
           if($donnees['categorie']=="hi_fi")
		   {
			   if($donnees['nom_materiel']==$_POST['nom_materiel'])
			   {
                 	$total=$total+$donnees['quantite'];
			   }
		   }
		}
		$req->closecursor();
		   if($total+$_POST['quantite'] > 10)
		   {
			   echo 'le nombre maximale par article est de 10'.'<a href="achat_materiels_bis_conect.php?id='.$donnees['id'].'">'.'</br>'.'retour'.'</a>';
		   }
		   else
		   {
			   $req = $bdd->prepare('INSERT INTO panier (um_id, jour, categorie, nom_materiel, prix, quantite, s_total) VALUES(:um_id, :jour, :categorie, :nom_materiel, :prix, :quantite, :s_total)')  ;
$req->execute(array(
    'um_id' => $_POST['um_id'],
	'jour' => $_POST['jour'],
    'categorie'=> $_POST['categorie'],
	'nom_materiel' => $_POST['nom_materiel'],
	'prix' => $_POST['prix'],
	'quantite' => $_POST['quantite'],
	's_total' => ($_POST['quantite']*$_POST['prix'])
	));
	$req->closecursor();
	header('Location: achat_materiels_bis_conect.php');
           }	
	 }
	 
?>
		
		
	



