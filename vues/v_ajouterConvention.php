<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererConventions&action=enregistrerAjout&id=<?= $id ?>">
    
    
        <input type = "hidden" name = "id" value = "<?= $id?>">
        <p>Nom du stagiaire : <strong><?= $stagiaire['nom'] ?></strong></p>
        <p>Prenom du stagiaire :<strong> <?= $stagiaire['prenom'] ?></strong></p>

        <div class="corpsForm">
            <fieldset><legend>Entreprise</legend>
                <select name="entreprise">
                <?php foreach($raisons as $ligne){ ?>
                    <option value = "<?= $ligne['id']?>"><?= $ligne['raisonSociale']?></option>'>
                <?php } ?>
            </select>
            </p>
                <p><label><a href="index.php?uc=gererEntreprises&action=ajouter" title="Ajouter une entreprise" style="color:#f00">
                    Nouvelle entreprise</a></label></p>
            </fieldset>
        </div>
        <div class="corpsForm">
            <fieldset><legend>Formateur</legend>
               <select name="formateur">
                <?php foreach($formateurs as $ligne){ ?>
                    <option value = "<?= $ligne['id']?>"><?= $ligne['nomPrenomFormateur']?></option>'>
                <?php } ?>
            </select></p>
                <p><label>  <a href="index.php?uc=gererFormateurs&action=ajouter" title="Ajouter un formateur" style="color:#f00">
                    Nouveau formateur</a></label></p>
            </fieldset>
        </div>  
        
      

        
        <div class="corpsForm">
            <fieldset><legend>Tuteur en entreprise</legend>
                <p><label>Nom et Prénom du tuteur: </label><input type = "text" name = "nomPrenomTuteur" size = 25 value=""></p>
                <p><label>Numéro tel Tuteur: </label><input type = "number" name = "telTuteur" size = "25" value=""></p>
                <p><label>Adresse mail tuteur: </label><input type = "text" name = "mailTuteur" size = 15 value=""></p>
                
                
            </fieldset>
        </div>
            <br>
    <input type ="submit" value = "Créer la convention">
    <input type = "reset" value = "Annuler" >
</form>
</div>