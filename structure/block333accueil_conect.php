<?php
setcookie('prenom', $_POST['prenom'], time() + 365*24*3600, null, null, false, true); 
setcookie('nom', $_POST['nom'], time() + 365*24*3600, null, null, false, true); 
setcookie('naissance', $_POST['naissance'], time() + 365*24*3600, null, null, false, true);
setcookie('adresse', $_POST['adresse'], time() + 365*24*3600, null, null, false, true);
setcookie('code', $_POST['code'], time() + 365*24*3600, null, null, false, true);
setcookie('ville', $_POST['ville'], time() + 365*24*3600, null, null, false, true);
setcookie('pays', $_POST['pays'], time() + 365*24*3600, null, null, false, true);
setcookie('email', $_POST['email'], time() + 365*24*3600, null, null, false, true);
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
setcookie('passe', $_POST['passe'], time() + 365*24*3600, null, null, false, true);
session_start();
$_SESSION['pseudo']=$_POST['pseudo'];
$_SESSION['passe']=$_POST['passe'];
$_SESSION['icone']=$_FILES['icone'];
?>

 <div class="bloc1">
    <h1>Nos points de vente sur le web</h1>
            <p>
               <a href="https://www.editions-eni.fr">editions-lbi.fr</a><br/>
               <a href="https://www.amazon.fr">amazon.fr</a><br/>
               <a href="https://www.fnac.com">fnac.com</a><br/>
               <a href="https://www.furet.com">furet.com</a>
            </p>
    <h2>Pour toute question, contactez-nous :</h2> 
            <p>editions@lbi.fr</p><br/>
	<?php
    if(isset($_COOKIE['prenom']) AND $_COOKIE['prenom']!=="" AND isset($_COOKIE['nom']) AND $_COOKIE['nom']!=="" AND  isset($_COOKIE['naissance']) AND $_COOKIE['naissance']!=="" AND isset($_COOKIE['adresse'] )
	AND $_COOKIE['adresse']!=="" AND isset($_COOKIE['code']) AND $_COOKIE['code']!=="" AND isset($_COOKIE['ville']) AND $_COOKIE['ville']!=="" AND isset($_COOKIE['pays']) AND $_COOKIE['pays']!==""AND isset($_COOKIE['email'])
	AND $_COOKIE['email']!==""AND isset($_COOKIE['pseudo']) AND $_COOKIE['pseudo']!=="" AND isset($_COOKIE['passe']) AND $_COOKIE['passe']!=="")
	         { 
			  if(isset($_FILES['icone']) AND $_FILES['icone']['error'] == 0 AND $_FILES['icone']['size'] <= 1000000)
			    {
                   $infosfichier = pathinfo($_FILES['icone']['name']);
                   $extension_upload = $infosfichier['extension'];
                   $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
				
                  if (in_array($extension_upload, $extensions_autorisees))
                    {
                        move_uploaded_file($_FILES['icone']['tmp_name'], '../'.'images/' .basename($_FILES['icone']['name']));
						 echo 'BONJOUR';
                         echo $_SESSION['pseudo']; 
			             echo '<img src="../images/' . $_FILES['icone']['name'] . '"/>' ; 
						 
                    }
					   		
                }
				else if(isset($_COOKIE['prenom']) AND $_COOKIE['prenom']!=="" AND isset($_COOKIE['nom']) AND $_COOKIE['nom']!=="" AND  isset($_COOKIE['naissance']) AND $_COOKIE['naissance']!=="" AND isset($_COOKIE['adresse'] )
	AND $_COOKIE['adresse']!=="" AND isset($_COOKIE['code']) AND $_COOKIE['code']!=="" AND isset($_COOKIE['ville']) AND $_COOKIE['ville']!=="" AND isset($_COOKIE['pays']) AND $_COOKIE['pays']!==""AND isset($_COOKIE['email'])
	AND $_COOKIE['email']!==""AND isset($_COOKIE['pseudo']) AND $_COOKIE['pseudo']!=="" AND isset($_COOKIE['passe']) AND $_COOKIE['passe']!=="")
					    { 
			            echo 'BONJOUR';
						echo $_SESSION['pseudo'];
		                }   				           			 
             }
			else if(isset($_COOKIE['prenom']) AND $_COOKIE['prenom']=="" AND isset($_COOKIE['nom']) AND $_COOKIE['nom']=="" AND  isset($_COOKIE['naissance']) AND $_COOKIE['naissance']=="" AND isset($_COOKIE['adresse'] )
	AND $_COOKIE['adresse']=="" AND isset($_COOKIE['code']) AND $_COOKIE['code']=="" AND isset($_COOKIE['ville']) AND $_COOKIE['ville']=="" AND isset($_COOKIE['pays']) AND $_COOKIE['pays']==""AND isset($_COOKIE['email'])
	AND $_COOKIE['email']==""AND isset($_COOKIE['pseudo']) AND $_COOKIE['pseudo']=="" AND isset($_COOKIE['passe']) AND $_COOKIE['passe']=="")
               {
	              echo('veuillez vous enregistrer sans ou avec photo');
	           }		           		
     ?>
</div>
<?php

	
