
<?php
session_start();
?>

    
    <?php
                                               
				           
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
                                $req = $bdd->prepare('UPDATE um SET  adresse=:nv_adresse, code=:nv_code, email=:nv_email, passe=:nv_passe WHERE pseudo=:nv_pseudo ');
								$req->execute(array('nv_adresse'=>$_POST['adresse'], 
								                    'nv_code'=>$_POST['code'], 
													'nv_email'=>$_POST['email'],
													'nv_passe'=>$_POST['passe'],
													'nv_pseudo'=>$_SESSION['pseudo']));
													
									$req->closecursor();
								$req = $bdd->prepare('UPDATE membres SET passe=:nv_passe WHERE pseudo=:nv_pseudo ');
								$req->execute(array('nv_passe'=>$_POST['passe'],
								                     'nv_pseudo'=>$_SESSION['pseudo']));
											header('Location: connexion.php');
                              				   
			   
		                        
       ?>
	   