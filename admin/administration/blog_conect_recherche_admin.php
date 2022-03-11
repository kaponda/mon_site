<?php
session_start();
if (( $_SESSION['pseudo']!== "kapios") OR ( $_SESSION['mot_de_passe']!=="kangourou")) 
{ 
 header('Location:../../accueil.php');
}
?>
<!DOCTYPE HTML >       
<html lang="fr">
     <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="../../menu1.css"> 
		<title> blog_conect</title>
	 </head>
     <body>
	    <div id="bloc_page">
	      <?php include("../../structure\block4.php"); ?>
	      <?php include("../../structure\block56_conect.php"); ?>
	      <?php include("../../structure\block133_conect_admin.php"); ?>
	      <?php include("../../structure\block23_conect_recherche_admin.php"); ?>
	      <?php include("../../structure\block3accueil_conect_admin.php"); ?>
	      <?php include("../../structure\pied_conect.php"); ?>
	    </div>
	 </body>
</html>