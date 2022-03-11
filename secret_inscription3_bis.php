<?php
session_start();
?>

 <?php
     if(isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0 AND $_FILES['photo']['size'] <= 1000000)
			{
                   $infosfichier = pathinfo($_FILES['photo']['name']);
                   $extension_upload = $infosfichier['extension'];
                   $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
				
                  if (in_array($extension_upload, $extensions_autorisees))
                    {
                       move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' .basename($_FILES['photo']['name']));
					   $_SESSION['photo']='images/' .$_FILES['photo']['name'];
					
						// Connexion à la base de données
						
                                     try
                                       {
	                                    $bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '');
                                       }
                                  catch(Exception $e)
                                       {
                                        die('Erreur : '.$e->getMessage());
                                       }

                          // Insertion du message à l'aide d'une requête préparée
                            $req = $bdd->prepare('INSERT INTO membres (pseudo, passe, photo) VALUES(?,?,?)');
                            $req->execute(array($_SESSION['pseudo'],$_SESSION['passe'],$_SESSION['photo']));
                       header('Location: connexion.php');	       
				    }
                
              	
            }
    else
    {
	   echo('veuillez vous enregistrer sans ou avec photo');
	}	
    ?>
    