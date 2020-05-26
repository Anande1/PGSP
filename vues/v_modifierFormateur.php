<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererFormateurs&action=enregistrerModif">
        <div class="corpsForm">
            <fieldset><legend>Modifier un formateur</legend>
                <input type = "hidden" name = id value = "<?= $id ?>">
                <p><label>Nom et Prénom  : </label><input type = "text" name = "nomPrenom" size = "20" value ="<?= $nomPrenom ?>"></p>
            </fieldset>
        </div>
            <br>
    <input type ="submit" value = "Valider"><br><br>
    <input type = "reset" value = "Annuler" >
</form>
</div>