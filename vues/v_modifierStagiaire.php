<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererStagiaires&action=enregistrerModif">
        <div class="corpsForm">
            <input type = "hidden" name = id value = "<?= $id ?>">
            <fieldset><legend>Modifier le (la) stagiaire</legend>
                <p><label>Nom :</label><input type = "text" name = "nom" size = 25 value = "<?= $nom ?>"></p>
                <p><label>Prénom : </label><input type = "text" name = "prenom" size = 15 value = "<?= $prenom ?>"></p>
                <p><label>Téléphone : </label><input type = "text" name = "tel" size = "10" value ="<?= $telephone ?>"></p>
                <p><label>Mail : </label><input type = "text" name = "mail" size = "25" value = "<?= $mail ?>"></p>
                <p><label>Adresse : </label><input type = "text" name = "adresse" size = "40" value = "<?= $adresse ?>"></p>
                <p><label>Promotion * : </label><select name="promotion" ><?php foreach($lesPromotions as $unePromotion){?>
                                                                        <option value ="<?= $unePromotion?>">
                                                                        <?= $unePromotion?></option>
                                                                        <?php } ?>
                                                                        </select></p>
            </fieldset>
        </div>
            <br>
    <input type ="submit" value = "Valider">
    <input type = "reset" value = "Annuler" >
</form>
</div>