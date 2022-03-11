
<div class="bloc1">
    <h2 style="color:red">BONJOUR</h2>
			<p><?php echo $_SESSION['pseudo']; ?></p>
			<p>
		<?php	
			if (isset($_SESSION['photo']))
			{			
             echo '<img src="'.$_SESSION['photo'].'" alt="#" style="width:150px; height:100px; border-radius: 30% ;"/>' ;
			}
        ?>
            </p>		
    <h2>Nos points de vente sur le web</h2>
            <p>
               <a href="https://www.editions-eni.fr">editions-lbi.fr</a><br/>
               <a href="https://www.amazon.fr">amazon.fr</a><br/>
               <a href="https://www.fnac.com">fnac.com</a><br/>
               <a href="https://www.furet.com">furet.com</a>
            </p>
    <h2>Pour toute question, contactez-nous :</h2> 
            <p>editions@lbi.fr</p><br/>
			 
</div>

