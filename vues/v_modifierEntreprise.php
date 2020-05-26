<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererEntreprises&action=enregistrerModif">
        <div class="corpsForm">
            <input type = "hidden" name = id value = "<?= $id ?>">
            <fieldset><legend>Modifier une entreprise</legend>
                <p><label>Raison sociale :</label><input type = "text" name = "raisonSociale" size = 25 value = "<?= $raison ?>"></p>
                <p><label>Adresse : </label><input type = "text" name = "adresse" size = 25 value = "<?= $adresse ?>"></p>
                <p><label>Nom et Prenom du responsable : </label><input type = "text" name = "nomPrenomResponsable" size = "20" value ="<?= $nomPrenom ?>"></p>
                <p><label>Telephone : </label><input type = "text" name = "telResponsable" size = "10" value ="<?= $telephone ?>"></p>
                <p><label>Mail : </label><input type = "text" name = "mail" size = "25" value = "<?= $mail ?>"></p>


            </fieldset>
        </div>
            <br>
    <input type ="submit" value = "Valider"><br><br>
    <input type = "reset" value = "Annuler" >
</form>
</div>