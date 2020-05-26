<div id="contenu">
<form  action= "index.php?uc=connexion&action=afficherMenu" method="post" >
    Stage :
    <select name="choixStage" >
     <?php foreach($lesStages as $ligne){ 
          ?>
        <option <?php if($stageActuel == $ligne['id']) echo "selected = selected" ?>>
        <?= $ligne['id']?></option>
       
     <?php } ?>
    </select>

    Option :
    <select name="choixOption" >
        <option <?php if($optionActuelle == "Sisr") echo "selected = selected" ?>>Sisr</option>
        <option <?php if($optionActuelle == "Slam") echo "selected = selected" ?>>Slam</option>
    </select>
    <input type="submit" name="valider" value="Valider">
</form>
</div>