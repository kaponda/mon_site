<?php
session_start();
if  (!isset($_SESSION['pseudo']))
{
	header('Location:accueil.php');
}
?>

<!DOCTYPE HTML >       
<html lang="fr" enctype="multipart/form-data">
     <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="menu1.css"> 
		<title> accueil_conect</title>
	 </head>
     <body>
	    <div id="bloc_page">
	      <?php include("structure\block4.php"); ?>
	      <?php include("structure\block5_conect.php"); ?>
	      <?php include("structure\block1.php"); ?>
	      <?php include("structure\block2accueil_conect.php"); ?>
	      <?php include("structure\block3accueil_conect.php"); ?>
	      <?php include("structure\pied_conect.php"); ?>
	    </div>
	 </body>
</html>
