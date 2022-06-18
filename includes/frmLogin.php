<form action="index.php?page=login" method="post">
<div>
<label for="nom">Email :</label>
<input type="text" id="email" name="email" value="<?=$row['email']?>"><!-- j'ai affecter la valeur de recuperer
 de l'email au champ email pour tester  -->
</div>
<div>
<label for="mdp">Password :</label>
<input type="password" id="mdp" name="mdp">
</div>
<div>
    <input type="submit" value="envoyer">
</div>








</form>