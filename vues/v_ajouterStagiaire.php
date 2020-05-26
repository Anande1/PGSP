<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererStagiaires&action=enregistrerAjout">
        <div class="corpsForm">
            <fieldset><legend>Nouveau(elle) stagiaire</legend>
                <p><label>Nom * :</label><input type = "text" name = "nom" size = 25 value=""required></p>
                <p><label>Prénom * : </label><input type = "text" name = "prenom" size = 15 value=""required></p>
                <p><label>Promotion : </label><select name="promotion" ><?php foreach($lesPromotions as $unePromotion){ ?>
                                                                    <option value ="<?= $unePromotion?>"><?= $unePromotion?></option>
                                                                    <?php } ?>
                                                                    </select></p>
                <p><label>Option (SISR ou SLAM) : </label> <?= $_SESSION['option']?></p>
                <p><label>Téléphone : </label><input type = "text" name = "tel" size = "10" value=""></p>
                <p><label>Mail : </label><input type = "text" name = "mail" size = "25" value=""></p>
                <p><label>Adresse : </label><input type = "text" name = "adresse" size = "40" value=""></p>
                
               
            </fieldset>
        </div>
            <br>
    <input type ="submit" value = "Valider">
    <input type = "reset" value = "Annuler" >
</form>
</div>