    <?php
	session_start();
	
	?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès administration</title>
    </head>
    <body>
    
    <?php
    if ( isset($_POST['pseudo']) AND $_POST['pseudo'] == "kapios" AND $_POST['pseudo'] !==" " AND isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] =="kangourou") // Si le mot de passe est bon
	{
	$_SESSION['pseudo']=$_POST['pseudo'];
	$_SESSION['mot_de_passe']=$_POST['mot_de_passe'];
    
    // On affiche la page		  
     header('Location:administration/');
	}
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>login ou Mot de passe incorrect </p>';
    }
    ?>
    
        
    </body>
</html>
    