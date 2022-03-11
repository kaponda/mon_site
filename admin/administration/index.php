<?php
session_start();
if ( isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "kapios" AND isset($_SESSION['mot_de_passe']) AND $_SESSION['mot_de_passe'] =="kangourou")
{
header('Location:accueil_conect_admin.php');
}
?>