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

                                                 // On récupère le pseudo et mot de passe
          $req = $bdd->query('SELECT pseudo, passe, photo FROM membres ');
		  
		    
		while ($donnees = $req->fetch())
		{
			  {
				   
		           if (isset($_POST['pseudo']) AND $_POST['pseudo'] == $donnees['pseudo'] AND $_POST['pseudo'] !==""  AND isset($_POST['passe']) AND $_POST['passe']==$donnees['passe'] ) 
	                  {
						$_SESSION['photo']=$donnees['photo'];
						
			            
		              }            							
			  }	
		 }         
                       
       	    $req->closecursor();
    ?>               
            
		   
    <?php                                             
			
           $req = $bdd->query('SELECT id, pseudo, passe  FROM um');
		        
				   while ($reponse = $req->fetch())
			        {
				   
		             if (isset($_POST['pseudo']) AND $_POST['pseudo'] == $reponse['pseudo'] AND $_POST['pseudo'] !=="" AND isset($_POST['passe']) AND $_POST['passe']==$reponse['passe']) 
	                  {
						$_SESSION['pseudo']=$reponse['pseudo'];
						$_SESSION['id']=$reponse['id'];
			            header('Location: connexion.php');
		              }            							
			        }	
		      
            $req->closecursor();
            echo('veuillez réessayer de vous connecter');        
    ?>