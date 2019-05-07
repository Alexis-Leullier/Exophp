<form method="post" action="index.php?page=registration">
    <div>
        <label for="">Nom&nbsp;:</label>
        <input name="nom" type="text">
    </div>
    <div>
        <label for="">Prenom&nbsp;:</label>
        <input name="prenom" type="text">
    </div>
    <div>
        <label for="">Mail&nbsp;:</label>
        <input type="email" name="mail">
    </div>
    <div>
        <label for="">Mot de passe&nbsp;:</label>
        <input name="mdp" type="password">
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Valider">
    </div>
    <input type="hidden" name="validation">
</form>