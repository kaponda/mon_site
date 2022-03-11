
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <p>Veuillez entrer le mot de passe de l'administrateur :</p>
        <form action="secret" method="post">
            <p>
			<label for="pseudo">Votre pseudo :</label><br/>
            <input type="text" name="pseudo" id="pseudo" /><br/>
			<label for="mot_de_passe">Votre mot de passe :</label><br/>
            <input type="password" name="mot_de_passe" id="mot_de_passe" /><br/>
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée à l'administration. Si vous n'en faite pas partie, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    </body>
</html>