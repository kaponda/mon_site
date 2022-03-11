<div class="bloc1">
  <h2> ajouter un commentaire</h2>
    <form action="secret9.php" method="GET">
        <p>
		  <input type="hidden" name="id_billet" value=<?php echo $_GET['billet']; ?> /> 
          <label for="pseudo">votre pseudo</label>   : <input type="text" name="pseudo" id="pseudo" /><br />
          <label for="commentaire">commentaire</label> :  <input type="text" name="commentaire" id="commentaire" /><br />
          <input type="submit" value="Envoyer" />
	    </p>
    </form>
</div>