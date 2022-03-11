<?php
session_start();
?>

 <?php
    if (isset($_POST['prenom']) OR isset($_POST['nom']) OR  isset($_POST['naissance'])  OR isset($_POST['adresse'])
	 OR isset($_POST['code']) OR isset($_POST['ville']) OR isset($_POST['pays']) OR isset($_POST['email'])
	 OR isset($_POST['pseudo']) OR isset($_POST['passe']))
	         { $_SESSION['pseudo']=$_POST['pseudo'];
			   $_SESSION['passe']=$_POST['passe'];
			  
						// Connexion à la base de données
                                     try
                                       {
	                                    $bdd = new PDO('mysql:host=localhost;dbname=document;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                       }
                                  catch(Exception $e)
                                       {
                                        die('Erreur : '.$e->getMessage());
                                       }

                          // Insertion du message à l'aide d'une requête préparée
                            $req = $bdd->prepare('INSERT INTO um ( prenom, nom, naissance, adresse, code, ville, pays, email, pseudo, passe) VALUES(?,?,?,?,?,?,?,?,?,?)');
                            $req->execute(array($_POST['prenom'], $_POST['nom'], $_POST['naissance'], $_POST['adresse'], $_POST['code'], $_POST['ville'], $_POST['pays'], $_POST['email'], $_POST['pseudo'], $_POST['passe']));
                             
				    
					
                
              
		        
			header('Location: inscription_bis.php');	
            }
    else
    {
	   echo('veuillez vous enregistrer sans ou avec photo');
	}	
    ?>
    