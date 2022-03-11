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
		<title> inscription</title>
	 </head>
     <body>
	    <div id="bloc_page">
	      <?php include("../../structure\block4.php"); ?>
	      <?php include("../../structure\block56_conect.php"); ?>
	      <?php include("../../structure\block15.php"); ?>
	      <?php include("../../structure\block25.php"); ?>
	      <?php include("../../structure\block3accueil_conect_admin.php"); ?>
	      <?php include("../../structure\pied.php"); ?>
	    </div>
	 </body>
	</html>