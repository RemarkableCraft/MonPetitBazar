<form action="?action=save" method="post">
	<input type="text" name="nom" placeholder="Nom*" required>
	<br><br>
	<input type="text" name="prenom" placeholder="Prénom*" required>
	<br><br>
	<input type="submit" name="envoi" value="Enregister">
</form>

<p><?= (isset($postEnvoi)) ? 'Bonjour '.$postNom : null ?></p>

<form action="?action=save" method="post">
	<input type="submit" name="page" value="Page B">
</form>

