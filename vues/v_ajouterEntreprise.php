<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererEntreprises&action=enregistrerAjout">
        <div class="corpsForm">
            <fieldset><legend>Nouvelle entreprise</legend>
                <p><label>Raison sociale * :</label><input type = "text" name = "raisonSociale" size = 25 value="" required></p>
                <p><label>Adresse * : </label><input type = "text" name = "adresse" size = 50 value=""required></p>
                <p><label>Nom Prénom responsable * :</label><input type = "text" name = "nomPrenomResponsable" size = "25" value="" required></p>
                <p><label>Téléphone : </label><input type = "text" name = "telResponsable" size = "10" value=""></p>
                <p><label>Mail : </label><input type = "text" name = "mailResponsable" size = "25" value=""></p>

            </fieldset>
        </div>
            <br>
    <input type ="submit" value = "Valider">
    <input type = "reset" value = "Annuler" >
</form>
</div>