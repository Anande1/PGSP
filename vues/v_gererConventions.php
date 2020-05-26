<div id="contenu">
<h1 >Les stagiaires</h1>
<table class =  "listeLegere">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
<?php 
foreach ($lesStagiaires as $ligne)
{
    $id = $ligne['id'];
    $nom = $ligne['nom'];
    $prenom = $ligne['prenom'];
    $idStage = $ligne['idStage'];
    $idConvention = $ligne['idConvention'];
    ?>
    <tr>
        <td><?= $nom ?></td>
        <td><?= $prenom ?></td>
        <td>
        <?php if($idStage != $_SESSION['stage']){  ?>
        <a href="index.php?uc=gererConventions&action=ajouter&id=<?= $id ?>" style="color:blue">Création d'une convention
        <?php }else { ?>
            <a href="index.php?uc=gererConventions&action=modifier&id=<?= $id ?>&idConvention=<?= $idConvention ?>" style="color:blue">Modification d'une convention
        <?php }?>
        </td>
        
    
  </tr>
<?php 
}
?>
</table>
</div>