
<div class="bloc">

   <h1 style="color:red">BONJOUR</h1>
     <?php  echo $_SESSION['pseudo']; ?>
   <h2>vous êtes bien connecté sur notre site</h2>
   <?php
        if (isset($_SESSION['photo']))
		{		
          echo '<img src="'.$_SESSION['photo'].'" alt="#" style="width:200px; height:150px; border-radius: 30%;" />' ;
		}
    ?>
</div>
