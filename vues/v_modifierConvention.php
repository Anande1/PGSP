<div id="contenu">
<h1><b></b></h1>
    <form method = "post" action = "index.php?uc=gererConventions&action=enregistrerModifications">
    
        <p>Nom du stagiaire :<strong> <?= $stagiaire['nom'] ?><strong></p>
        
        <p>Prenom du stagiaire : <?= $stagiaire['prenom'] ?></p>
        
            
        <div class="corpsForm">
            <fieldset><legend>Entreprise</legend>
                <p><label><p>Nom de l'entreprise : <strong><?= $raisonSociale?></strong></label></p>
               <p><label>Autre entreprise : </label>
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
                <p><label><p>Formateur : <strong><?= $nomPrenomFormateur?></strong></p>
                <p><label>Autre formateur: </label><select name="formateur">
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
                <p><label>Nom et Prénom: </label><input type = "text" name = "nomPrenomTuteur" size = 25 value="<?= $nomPrenomTuteur?>"></p>
                <p><label>Téléphone: </label><input type = "number" name = "telTuteur" size = "25" value="<?= $telTuteur?>"></p>
                <p><label>mail: </label><input type = "text" name = "mailTuteur" size = 15 value="<?= $mailTuteur?>"></p>
            </fieldset>
        </div>
            <br>
        <input type ="submit" value = "Modifier la convention">
        <input type = "reset" value = "Annuler" >
    </form>
    <form method = "post" action = "index.php?uc=gererConventions&action=imprimer">
        <input type ="submit" value = "Imprimer">      
    </form>
   
</div>
