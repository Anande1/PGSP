<div id="contenu">
<h1 >Les entreprises </h1>
<a href="index.php?uc=gererEntreprises&action=ajouter" style="color:blue">Ajouter une entreprise</a><br><br>
<table class =  "listeLegere">
    <tr>
        <th>Raison sociale</th>
        <th>Ville</th>
    </tr>
<?php 
foreach ($lesEntreprises as $ligne)
{
    $id = $ligne['id'];
    $raison = $ligne['raisonSociale'];
    $adresse = $ligne['adresse'];
    ?>
    <tr>
        <td><?= $raison ?></td>
        <td><?= $adresse ?></td>
        <td><a href="index.php?uc=gererEntreprises&action=modifier&id=<?= $id ?>" style="color:blue">Modification</td>
      
     
  </tr>
<?php 

}

?>
</table>
</div>